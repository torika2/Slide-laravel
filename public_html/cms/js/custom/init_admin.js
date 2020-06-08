class handleMultiImages {
    constructor(name, file) {
        this.name = name; //save as columnID
        this.file = file;
    }

    change() {
        let files = this.file;
        // if there is Preview DOM parent element
        if ($("#" + this.name + "-prev").length > 0) {
            // Preview DOM element
            let gallery = document.querySelector(
                "#" + this.name + "-prev .gallery-" + this.name
            );
            // Remove temporary files if exist
            let temporaryFiles = document.querySelectorAll(".temporary");
            if (temporaryFiles.length > 0) {
                for (var i = 0; i < temporaryFiles.length; i++) {
                    gallery.removeChild(temporaryFiles[i]);
                }
            }
            // Loop through files
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                //Only pics
                if (!file.type.match("image")) continue;

                var picReader = new FileReader();
                picReader.addEventListener("load", function (event) {
                    var picFile = event.target;
                    var li = document.createElement("li");
                    li.setAttribute("class", "temporary");
                    li.innerHTML =
                        "<img class='thumbnail' src='" +
                        picFile.result +
                        "'" +
                        "title='" +
                        file.name +
                        "'/>";
                    gallery.appendChild(li);
                    // gallery.insertBefore(div, null);
                });
                //Read the image
                picReader.readAsDataURL(file);
            }
        } else {
            //create parent and push images
            let root = document.querySelector("." + this.name).parentElement;
            let sibling = document.querySelector("." + this.name + "-end");
            let parentTemp = document.createElement("div");
            parentTemp.innerHTML = "";
            parentTemp.setAttribute("class", "form-group col-md-12");
            parentTemp.setAttribute("id", this.name + "-prev");
            root.insertBefore(parentTemp, sibling);

            let ul = document.createElement("ul");
            ul.setAttribute("class", "gallery gallery-" + this.name);
            parentTemp.appendChild(ul);

            // Remove temporary files if exist
            let temporaryFiles = document.querySelectorAll(".temporary");
            if (temporaryFiles.length > 0) {
                for (var i = 0; i < temporaryFiles.length; i++) {
                    ul.removeChild(temporaryFiles[i]);
                }
            }

            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                //Only pics
                if (!file.type.match("image")) continue;

                var picReader = new FileReader();
                picReader.addEventListener("load", function (event) {
                    var picFile = event.target;
                    var li = document.createElement("li");
                    li.setAttribute("class", "temporary");
                    li.innerHTML =
                        "<img class='thumbnail' src='" +
                        picFile.result +
                        "'" +
                        "title='" +
                        file.name +
                        "'/>";
                    ul.appendChild(li);
                });
                //Read the image
                picReader.readAsDataURL(file);
            }
        }
    }

    removeImages(data) {
        //remove image from html
        let fullPath = data.baseUrl + "/" + data.src + data.name;
        let img = document.querySelector("img[src='" + fullPath + "']");
        $(img).parent().remove();

        //post data to remove image form record
        //return status
        let url =
            "/connect/" +
            data.model +
            "/" +
            data.module_id +
            "/module/" +
            data.id +
            "/images";
        $.ajax({
            type: "DELETE",
            beforeSend: function (request) {
                request.setRequestHeader(
                    "X-CSRF-Token",
                    $('meta[name="csrf-token"]').attr("content")
                );
            },
            url: url,
            data: data,
            success: function (msg) {
                console.log(msg);
            },
        });
        // ajax.post().then().catch();
        console.log(img);
    }
}

class handleSingleImg {
    constructor(name, file) {
        this.name = name;
        this.file = file;
    }

    change() {
        console.log(this.file);
        if ($("#" + this.name + "-prev").length > 0) {
            let panel = $("#" + this.name + "-prev").find(".panel-saving");
            panel.remove();
        } else {
            let root = document.querySelector("." + this.name).parentElement;
            let sibling = document.querySelector("." + this.name + "-end");
            let parentTemp = document.createElement("div");
            parentTemp.innerHTML = "";
            parentTemp.setAttribute("class", "form-group col-md-12");
            let template =
                "<div id='" +
                this.name +
                "-prev' style='margin-top:1.5rem;width:20%;min-width:250px' class='panel' data-panel-fullscreen='' data-panel-close='' data-panel-collapsed='' data-panel-locked='' data-panel-refresh='' data-panel-custombutton='' data-panel-reset='' role='widget' data-panel-attstyle='bg-danger-900 bg-info-gradient'>" +
                "<div class='panel-hdr' role='heading'>" +
                "<h2 class='ui-sortable-handle'>Image<span class='fw-300'></span></h2>" +
                "<div class='panel-saving mr-2' '=''>" +
                "</div>" +
                "</div>" +
                "<div class='panel-container show' role='content'>" +
                "<div class='panel-content'>" +
                "<img class='" +
                this.name +
                "-src' src='' alt='Uploaded Image Preview Holder' width='100%'> " +
                "</div>" +
                "</div>" +
                "</div>";
            parentTemp.innerHTML = template;
            root.insertBefore(parentTemp, sibling);
        }
        let el = $("." + this.name + "-src");
        this.readURL(this.file, el);
    }

    readURL(input, el) {
        let name = this.name;
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                el.attr("src", e.target.result);
                return e.target.result;
            };
            reader.readAsDataURL(input.files[0]);
            $("#" + name + "-prev").css("display", "block");
        }
    }
}

class SetActive {
    constructor(model, column = "active", single = 0) {
        this.model = model;
        this.column = column;
        this.single = single;
    }

    init(id, value) {
        var data = {
            model: this.model,
            id: id,
            value: value,
            column: this.column,
            single: this.single,
        };
        $.ajax({
            type: "POST",
            beforeSend: function (request) {
                request.setRequestHeader(
                    "X-CSRF-Token",
                    $('meta[name="csrf-token"]').attr("content")
                );
            },
            url: "/connect/set-model-data-active",
            data: data,
            success: function (msg) {
                if (msg.singleData && msg.singleData.length > 0) {
                    for (var i = 0; i < msg.singleData.length; i++) {
                        var input = document.getElementById(
                            "set_active_" + msg.singleData[i] + "_1"
                        );
                        if (input) {
                            input.checked = false;
                        }
                    }
                }
            },
        });
    }
}

class Unsubscribe {
    constructor(model, column = "active", single = 0) {
        this.model = model;
        this.column = column;
        this.single = single;
    }

    init(id, value) {
        var data = {
            model: this.model,
            id: id,
            value: value,
            column: this.column,
            single: this.single,
        };
        $.ajax({
            type: "POST",
            beforeSend: function (request) {
                request.setRequestHeader(
                    "X-CSRF-Token",
                    $('meta[name="csrf-token"]').attr("content")
                );
            },
            url: "/connect/subscribe/unsubscribe",
            data: data,
            success: function (msg) {
                if (msg.singleData && msg.singleData.length > 0) {
                    for (var i = 0; i < msg.singleData.length; i++) {
                        var input = document.getElementById(
                            "set_active_" + msg.singleData[i] + "_1"
                        );
                        if (input) {
                            input.checked = false;
                        }
                    }
                }
            },
        });
    }
}

class removeModelImage {
    init(object) {
        let el = object.el;
        let objectData = {
            column: object.column,
            folder: object.folder,
            gate: object.gate,
            id: object.id,
            model: object.model,
            modelRemove: object.modelRemove,
            locale: object.locale,
        };
        $.ajax({
            type: "POST",
            beforeSend: function (request) {
                request.setRequestHeader(
                    "X-CSRF-Token",
                    $('meta[name="csrf-token"]').attr("content")
                );
            },
            url: "/connect/remove-model-image",
            data: objectData,
            success: function (response) {
                if (response.statusCode == 200) {
                    if (!object.modelRemove) {
                        console.log("singleImage");
                        el.parent().parent().parent().remove();
                    } else {
                        el.parent().remove();
                        console.log("multiImage");
                    }
                }
            },
        });
    }
}

class removeVideo {
    init(id, column, model, folder, fullremove = false) {
        let objectData = {
            id: id,
            column: column,
            model: model,
            folder: folder,
            fullremove: fullremove,
        };
        $.ajax({
            type: "POST",
            beforeSend: function (request) {
                request.setRequestHeader(
                    "X-CSRF-Token",
                    $('meta[name="csrf-token"]').attr("content")
                );
            },
            url: "/connect/remove-model-video",
            data: objectData,
            success: function (response) {
                console.log(response);
                // if (response.statusCode == 200) {
                // }
            },
        });
    }
}
