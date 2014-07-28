(function () {
    /// kiểm tra các REFERENCES
    if (typeof (jQuery) === 'undefined')
        throw new Error('vn.eten.web.AjaxUploader require jQuery!');

    /// Định nghĩa NAMESPACE
    window.vn = window.vn || {};
    vn.eten = vn.eten || {};
    vn.eten.web = vn.eten.web || {};
    vn.eten.web.AjaxUploader = function (opt) {

        if (!opt) throw new Error('vn.eten.web.AjaxUploader require construction parameter!');
        if (!opt.file) throw new Error('vn.eten.web.AjaxUploader require parameter: "file"!');
        if (!opt.file.files) throw new Error('Your browser doesnot support vn.eten.web.AjaxUploader!');
        if (opt.file.files.length == 0) throw new Error('File not found!');

        opt = $.extend({ bufferSize: 64 * 1024, base: "", service: "UploadSvr.ashx" }, opt);

        /// Định nghĩa Private Method
        function uploadComplete(key) {
            if (opt.finalize) opt.finalize();
            $.ajax({ url: opt.base + opt.service + "?cmd=close", type: "POST", cache: false, data: { k: key} }).done(function () {
                if (opt.done) opt.done();
            }).fail(function () { if (opt.fail) opt.fail(); });
        }

        function ajaxUpload(data) {

            var cancelled = false;
            var completed = false;
            var key;

            var result = {
                cancel: function () {
                    cancelled = true;
                },
                isCancelled: function () {
                    return cancelled;
                },
                isCompleted: function () {
                    return completed;
                }
            };

            var startPosition = data.indexOf(";base64,");
            if (startPosition == -1) {
                alert("Invalid data");
                cancelled = true;
                return result;
            }
            startPosition += ";base64,".length;

            $.ajax({ url: opt.base + opt.service + "?cmd=create", cache: false }).done(function (response) {
                key = response.substring(3);
                if (cancelled) {
                    result.cancel();
                }

                var position = startPosition;
                var lastChunkLength = 0;

                function uploadChunk(chuckResponse) {
                    if (chuckResponse != "OK") {
                        if (opt.fail) opt.fail();
                        cancelled = true;
                        return;
                    }
                    if (lastChunkLength != 0) {
                        position += lastChunkLength;
                    }
                    var chunk = data.substr(position, opt.bufferSize);
                    lastChunkLength = chunk.length;
                    if (lastChunkLength == 0) {
                        if (opt.chunkDone) opt.chunkDone({ percent: 100, uploaded: position, totalSize: data.length });
                        uploadComplete(key);
                        completed = true;
                        return;
                    }

                    if (opt.chunkDone) opt.chunkDone({ percent: position * 100.0 / data.length, uploaded: position, totalSize: data.length });
                    if (cancelled)
                        $.ajax({ url: opt.base + opt.service + "?cmd=cancel", type: "POST", cache: false, data: { k: key} }).done(function () { if (opt.cancel) opt.cancel(); });
                    else
                        $.ajax({ url: opt.base + opt.service, type: "POST", cache: false, data: { k: key, d: chunk} }).done(uploadChunk);
                }


                uploadChunk("OK");
            }).fail(function () { if (opt.fail) opt.fail(); });

            return result;
        }

        /// Định nghĩa Private Variable
        var isStarted = false;

        /// Định nghĩa Public Method
        this.start = function () {
            if (isStarted) throw new Error("Already started!");

            isStarted = true;
            if (window.FileReader) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    var r1 = ajaxUpload(e.target.result);
                    if (opt.start) opt.start(r1);
                };
                reader.readAsDataURL(opt.file.files[0]);
            } else if (opt.file.getAsDataURL) {
                var r2 = ajaxUpload(opt.file.getAsDataURL());
                if (opt.start) setTimeout(opt.start, 1, r2);
            }
        };
    };

    /// Định nghĩa Private Static Variable
    var inputFile = document.createElement("input");
    inputFile.type = "file";

    /// Định nghĩa Public Static Method
    vn.eten.web.AjaxUploader.isSupported = function () {
        return inputFile.files && (window.FileReader || inputFile.getAsDataURL);
    };
})();