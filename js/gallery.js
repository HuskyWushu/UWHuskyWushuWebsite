/**
 * Created by Ivy on 12/3/14.
 */
    $(document).ready(function() {
        var img = "../img/GalleryImages/2012";
        var fileextension = [".png", ".jpg"];
        var imagesDisplayed = $(data).find("a:contains(" + (fileextension[0]) + "), a:contains(" + (fileextension[1]) + ")").each(function () {
            $.ajax({
                //This will retrieve the contents of the folder if the folder is configured as 'browsable'
                url: dir,
                success: function (data) {
                    //Lsit all png file names in the page
                    $(data).find("a:contains(" + fileextension + ")").each(function () {
                        var filename = this.href.replace(window.location.host, "").replace("http:///", "");
                        $("body").append($("<img src=" + dir + filename + "></img>"));
                    });
                }
            });
        });

        var gallery = $('#gallery');
        var row = $(document.createElement('div'));
        var img;
        _.forEach(imagesDisplayed, (elemIndex) {
            if(elemIndex > 0 && 0 == elemIndex % 4) {
                gallery.append(row);
                row = $(document.createElement('div'));
            }
            img = $(document.createElement('img'));
            row.append(img);
        });
        gallery.append(row);
    });

