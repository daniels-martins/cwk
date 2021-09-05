const doc = document;
window.onload = function fadeout() {
    const hide = setInterval(() => {
        const wrapper = doc.querySelector(".wrapper") || null;
        wrapper ? (wrapper.style.display = "none") : null;
        console.log("oyaya", wrapper);
        const loader = document.getElementById("loader");
        let opacity = Number(
            window.getComputedStyle(loader).getPropertyValue("opacity")
        );
        if (doc.readyState === "complete") {
            // if (opacity > 0.1) {
            //     opacity = opacity - 0.1;
            //     loader.style.opacity = opacity;
            // }
            setTimeout(() => {
                loader ? (loader.style.display = "none") : null;
                wrapper ? (wrapper.style.display = "block") : null;
                // wrapper.style.display = "block";
                if (loader.style.display === "none") {
                    console.log('yeye');
                }
                clearInterval(hide);
            }, 10);
        } else {
        }
    }, 10);
};
