var whatsappchat = {
    multipleUser: function (options) {
        var defaultSettings = {
            users: [""],
            headerMessage: "Feel free to ask any questions!",
            chatBoxMessage: "The team typically replies in a few minutes.",
            color: "#4ee676",
            selector: "",
        };
        var settings = { ...defaultSettings, ...options };
        if (settings.selector != "") {
            var userList = "";
            settings.users.forEach(function (user, index) {
                var active = "active active-chat-border";
                if (
                    typeof settings.users[index].active != "undefined" &&
                    !settings.users[index].active
                ) {
                    active = "";
                }
                var image = "user/floating-wa/user.png";
                if (typeof settings.users[index].image != "undefined") {
                    image = settings.users[index].image;
                }
                designation = "";
                if (typeof settings.users[index].designation != "undefined") {
                    designation = settings.users[index].designation;
                }
                userList +=
                    '<li class="item rs-go-to-whatsapp ' +
                    active +
                    '" data-userId="' +
                    index +
                    '">' +
                    '<div class="col col-3"><div class="user-pro-pic-wrapper">' +
                    '<img class="user-pro-pic" src="' +
                    image +
                    '" style="width:100%; color:#3cb743"></div></div><div class="col">' +
                    '<div class="list-title">' +
                    settings.users[index].name +
                    '</div><div class="list-content">' +
                    designation +
                    "</div>" +
                    '<div class="list-latest-text">';
            });
            var element = null;
            if (settings.selector.charAt(0) == "#") {
                element = document.getElementById(
                    settings.selector.substring(1)
                );
            } else if (settings.selector.charAt(0) == ".") {
                element = document.getElementsByName(
                    settings.selector.substring(1)
                );
            } else {
                console.log(
                    "selector is not right format should be #example_id of .example_class"
                );
            }
            if (element != null) {
                var chatBox =
                    '<div class="ayoan_whatsapp_chatbox_container">' +
                    '<div class="rs-openChat" style="display: none"> <div class="ayoan_whatsapp_chatbox">' +
                    '<div class="widget-wrapper"> <div class="widget-header"> <div class="col col-2">' +
                    '<img class="header-icon" src="user/floating-wa/whatsapp.svg"> </div><div class="col col-10">' +
                    '<div class="header-title">Mulai Percakapan</div><div class="header-content">' +
                    settings.headerMessage +
                    '</div></div></div><div class="widget-body"><div class="body-title">' +
                    settings.chatBoxMessage +
                    '</div><div class="body-content ayoan_whatsapp_scroll1"><ul class="user-list">' +
                    userList +
                    '</ul></div></div></div></div><div class="widget-close-btn-row" >' +
                    '<button type="button" class="rs-close widget-close-btn">' +
                    '<img class="icon" src="user/floating-wa/close.svg"></button></div></div>' +
                    '<div class="rs-openChatBtn widget-close-btn-row" >' +
                    '<button type="button" class="rs-openChatBtn widget-close-btn">' +
                    '<img class="icon" src="user/floating-wa/whatsapp.svg"></button></div></div>';
                element.innerHTML = chatBox;
                changeColor(settings.color);
                var goToWhatsapp =
                    document.getElementsByClassName("rs-go-to-whatsapp");
                for (var i = 0; i < goToWhatsapp.length; i++) {
                    goToWhatsapp[i].addEventListener("click", function () {
                        var userId = this.getAttribute("data-userId");
                        message =
                            "Halo, saya berminat untuk sewa mobil di Kenz Trans Mohon info lebih lanjut";
                        sendWPMessage(
                            settings.users[parseInt(userId)].phone,
                            message
                        );
                    });
                }

                document
                    .getElementsByClassName("rs-openChatBtn")[0]
                    .addEventListener("click", function () {
                        document.getElementsByClassName(
                            "rs-openChatBtn"
                        )[0].style.display = "none";
                        document.getElementsByClassName(
                            "rs-openChat"
                        )[0].style.display = "block";
                    });
                document
                    .getElementsByClassName("rs-close")[0]
                    .addEventListener("click", function () {
                        document.getElementsByClassName(
                            "rs-openChatBtn"
                        )[0].style.display = "block";
                        document.getElementsByClassName(
                            "rs-openChat"
                        )[0].style.display = "none";
                    });
            }
        } else {
            console.log("selector is required to init");
        }
    },
};

function changeColor(color) {
    var widgetHeader = document.getElementsByClassName("widget-header");
    var widgetCloseBtn = document.getElementsByClassName("widget-close-btn");
    var chatBorder = document.getElementsByClassName("active-chat-border");
    var listIcon = document.querySelectorAll(
        ".ayoan_whatsapp_chatbox .widget-body .body-content .user-list .item.active .col-3 .list-icon-wrapper .list-icon path"
    );
    for (var i = 0; i < widgetHeader.length; i++) {
        widgetHeader[i].style.background = color;
    }
    for (var i = 0; i < widgetCloseBtn.length; i++) {
        widgetCloseBtn[i].style.background = color;
    }
    for (var i = 0; i < listIcon.length; i++) {
        listIcon[i].style.fill = color;
    }
    for (var i = 0; i < chatBorder.length; i++) {
        chatBorder[i].style.borderLeft = "3px solid " + color;
    }
}

function isMobile() {
    var mobileDevice = false;
    (function (a) {
        if (
            /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(
                a
            ) ||
            /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(
                a.substr(0, 4)
            )
        )
            check = true;
    })(navigator.userAgent || navigator.vendor || window.opera);
    return mobileDevice;
}

function sendWPMessage(phone, message = "") {
    // var isMobileTrue = isMobile();
    // var apiEndPoint = 'https://';
    // if(isMobileTrue){
    //     apiEndPoint = apiEndPoint+'api';
    // }else{
    //     apiEndPoint = apiEndPoint+'web';
    // }
    apiEndPoint =
        "https://api.whatsapp.com/send?phone=" +
        phone +
        "&text=" +
        encodeURI(message);

    window.open(apiEndPoint);
}
