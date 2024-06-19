// import './bootstrap';
import $ from "jquery";

import AOS from "aos";
import "aos/dist/aos.css";
import initials from "initials";
import axios from "axios";

const baseUrl = document.head.querySelector('meta[name="base-url"]').content;

const settingAos = {
    // Global settings:
    disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
    startEvent: "DOMContentLoaded", // name of the event dispatched on the document, that AOS should initialize on
    initClassName: "aos-init", // class applied after initialization
    animatedClassName: "aos-animate", // class applied on animation
    useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
    disableMutationObserver: false, // disables automatic mutations' detections (advanced)
    debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
    throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
    // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
    offset: 120, // offset (in px) from the original trigger point
    delay: 0, // values from 0 to 3000, with step 50ms
    duration: 1500, // values from 0 to 3000, with step 50ms
    easing: "ease", // default easing for AOS animations
    once: false, // whether animation should happen only once - while scrolling down
    mirror: false, // whether elements should animate out while scrolling past them
    anchorPlacement: "top-bottom", // defines which position of the element regarding to window should trigger the animation
};

const swiper = new Swiper(".mySwiper", {
    spaceBetween: 3,
    slidesPerView: 5,
    freeMode: true,
    watchSlidesProgress: true,
});

const swiper2 = new Swiper(".mySwiper2", {
    spaceBetween: 10,
    centeredSlides: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 1500,
        disableOnInteraction: false,
    },
    thumbs: {
        swiper: swiper,
    },
});

const util = (() => {
    const getChat = async () => {
        try {
            const res = await axios.get(`${baseUrl}/api/chat`);
            const data = res.data.data;

            data.forEach((el, idx) => {
                $("#box-chats")
                    .append(`<div class="flex items-start justify-between mb-4">
                    <div class="flex-none w-12 h-12 rounded-full bg-gray-400 box-border overflow-hidden flex items-center justify-center font-bold text-white text-lg mr-2 uppercase">
                        ${initials(el.nama)}
                    </div>
                    <div class="relative w-full bg-neutral-200 rounded-lg box-border p-2 pb-4 px-3 pr-5 text-sm relative">
                        <div class="text-black font-bold text-black text-base">${
                            el.nama
                        }</div>
                        <div>${el.body}</div>
                        <div class="absolute bottom-0 right-0 px-2 text-[10px] text-black">${
                            el.created_at
                        }</div>
                    </div>
                </div>`);
            });
        } catch (e) {
            console.log(e);
        }
    };

    const sendChat = async (payload) => {
        try {
            const res = await axios.post(`${baseUrl}/api/chat`, payload);
            const el = res.data.data;

            $("#box-chats")
                .append(`<div class="flex items-start justify-between mb-4">
                <div class="flex-none w-12 h-12 rounded-full bg-gray-400 box-border overflow-hidden flex items-center justify-center font-bold text-white text-lg mr-2 uppercase">
                    ${initials(el.nama)}
                </div>
                <div class="relative w-full bg-neutral-200 rounded-lg box-border p-2 pb-4 px-3 pr-5 text-sm relative">
                    <div class="arrow rotate-45"></div>
                    <div class="text-black font-bold text-black text-base">${
                        el.nama
                    }</div>
                    <div>${el.body}</div>
                    <div class="absolute bottom-0 right-0 px-2 text-[10px] text-black">${
                        el.created_at
                    }</div>
                </div>
            </div>`);
        } catch (e) {
            console.log(e);
        } finally {
            closeModalMessage();
        }
    };

    const sendKonfirmasi = async (payload) => {
        try {
            const res = await axios.post(`${baseUrl}/api/presensi`, payload);
            const el = res.data.data;
            console.log(el);
        } catch (e) {
            console.log(e);
        } finally {
            closeModalKonfirmasi();
        }
    };

    const openModalMessage = () => {
        $("#modal-message").show();
    };

    const closeModalMessage = () => {
        $("#message-fullname").val("");
        $("#message-alamat").val("");
        $("#message-body").val("");
        $("#modal-message").hide();
    };

    const openModalKonfirmasi = () => {
        $("#modal-konfir-hadir").show();
    };

    const closeModalKonfirmasi = () => {
        $("#konfirmasi-fullname").val("");
        $("input[type=radio]").val("1");
        $("#modal-konfir-hadir").hide();
    };

    const audToogle = () => {
        const btn = document.getElementById("btn-audio");
        if (btn.getAttribute("data-status") !== "1") {
            btn.setAttribute("data-status", "1");
            $("#mute-icon").hide();
            $("#play-icon").show();
            audio.play();
        } else {
            btn.setAttribute("data-status", "0");
            audio.pause();
            $("#play-icon").hide();
            $("#mute-icon").show();
        }
    };

    const autoScrollToogle = () => {
        const btn = document.getElementById("btn-autoscroll");
        if (btn.getAttribute("data-status") !== "1") {
            btn.setAttribute("data-status", "1");
            $("#stopscroll-icon").hide();
            $("#autoscroll-icon").show();
            autoScroll();
        } else {
            btn.setAttribute("data-status", "0");
            autoScroll();
            $("#autoscroll-icon").hide();
            $("#stopscroll-icon").show();
        }
    };

    const timer = () => {
        let countDownDate = new Date(
            document
                .getElementById("save-date")
                .getAttribute("data-time")
                .replace(" ", "T")
        ).getTime();

        let clear = null;
        clear = setInterval(() => {
            let distance = countDownDate - new Date().getTime();

            if (distance < 0) {
                clearInterval(clear);
                clear = null;
                return;
            }

            document.getElementById("hari").innerText = Math.floor(
                distance / (1000 * 60 * 60 * 24)
            );
            document.getElementById("jam").innerText = Math.floor(
                (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
            );
            document.getElementById("menit").innerText = Math.floor(
                (distance % (1000 * 60 * 60)) / (1000 * 60)
            );
            document.getElementById("detik").innerText = Math.floor(
                (distance % (1000 * 60)) / 1000
            );
        }, 1000);
    };

    const autoScroll = () => {
        let clear = null;
        clear = window.setInterval(() => {
            let aut = document
                .getElementById("btn-autoscroll")
                .getAttribute("data-status");
            // console.log(aut)

            if (aut < 1) {
                clearInterval(clear);
                clear = null;
                return;
            }

            window.scrollBy(0, 1);
        }, 50);
    };

    const copyNorek = () => {
        // Get the text field
        const copyText = document.getElementById("no-rek");

        // Select the text field
        // copyText.select();
        // copyText.setSelectionRange(0, 99999);

        // Copy the text inside the text field
        navigator.clipboard.writeText(copyText.value);

        // Alert the copied text
        alert("Copied to clipboard : " + copyText.value);
    };

    const buka = () => {
        $("#cover").hide();
        $("#main-content").show();
        $("#nav").show();
        AOS.init(settingAos);
        audio.play();
        timer();
        getChat();
        autoScroll();
    };

    return {
        buka,
        audToogle,
        openModalMessage,
        closeModalMessage,
        openModalKonfirmasi,
        closeModalKonfirmasi,
        timer,
        getChat,
        sendChat,
        sendKonfirmasi,
        copyNorek,
        autoScroll,
        autoScrollToogle,
    };
})();

$(document).ready(function () {
    $("#open-invite").on("click", () => util.buka());

    $("#btn-audio").on("click", () => util.audToogle());
    $("#btn-autoscroll").on("click", () => util.autoScrollToogle());

    $("#btn-copy-norek").on("click", () => util.copyNorek());

    $("#btn-show-message").on("click", () => util.openModalMessage());
    $("#btn-cancel-message").on("click", () => util.closeModalMessage());
    $("#open-konfirmasi").on("click", () => util.openModalKonfirmasi());
    $("#btn-cancel-konfir").on("click", () => util.closeModalKonfirmasi());

    $("#form-submit-message").on("submit", function (e) {
        e.preventDefault();

        const payload = {
            nama: $("#message-fullname").val(),
            alamat: $("#message-alamat").val(),
            body: $("#message-body").val(),
        };

        util.sendChat(payload);
    });

    $("#form-submit-konfir").on("submit", function (e) {
        e.preventDefault();

        const payload = {
            nama: $("#konfirmasi-fullname").val(),
            is_hadir: $("input[type=radio]").val(),
        };

        util.sendKonfirmasi(payload);
    });
});
