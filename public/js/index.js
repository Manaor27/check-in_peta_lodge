if (screen.width <= 400) {
    document.getElementById("logo").style.bottom = "";
    document.getElementById("logo").style.position = "relative";
    document.getElementById("logo").style.width = "400px";
    document.getElementById("logo").style.height = "300px";
} else {
    document.getElementById("logo").style.bottom = "300px";
    document.getElementById("logo").style.left = "calc(100vw - 520px)";
    document.getElementById("logo").style.position = "absolute";
    document.getElementById("logo").style.width = "500px";
    document.getElementById("logo").style.height = "400px";
}