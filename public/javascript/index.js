let ticking = false;

function updateParallax() {
    const sections = [
        { section: ".ukmSejarahimg", img: ".bgSejarah" },
        { section: ".ukmDeptimg", img: ".bgDept" }
    ];

    sections.forEach(({ section, img }) => {
        const sectionEle = document.querySelector(section);
        const imgEle = document.querySelector(img);

        if (sectionEle && imgEle) {
            const rect = sectionEle.getBoundingClientRect();
            const speed = 0.4;

            if (rect.top < window.innerHeight && rect.bottom > 0) {
                const offset = rect.top * speed * -1;
                imgEle.style.transform = `translateY(${offset}px)`;
            }
        }
    });

    ticking = false;
}

document.addEventListener("scroll", () => {
    if (!ticking) {
        requestAnimationFrame(updateParallax);
        ticking = true;
    }
});