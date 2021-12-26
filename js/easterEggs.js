const d = new Date();
if (d.getMonth() == 5 & d.getDate() == 30)
{
    const root = document.querySelector(':root');
    var h = 0;
    const s = 80;
    const l = 70;
    const speed = 0.5;

    setInterval(tick, 1000/60);

    function tick() {
        h = (h + speed) % 361;
        root.style.setProperty('--text-color', hslToHex(h, s, l));
    }

    function hslToHex(h, s, l) {
        l /= 100;
        const a = s * Math.min(l, 1 - l) / 100;
        const f = n => {
        const k = (n + h / 30) % 12;
        const color = l - a * Math.max(Math.min(k - 3, 9 - k, 1), -1);
        return Math.round(255 * color).toString(16).padStart(2, '0');
        };
        return `#${f(0)}${f(8)}${f(4)}`;
    }
}