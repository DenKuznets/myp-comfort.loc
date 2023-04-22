(function () {
    const buttons = document.querySelectorAll("#popUp");
    // попап в секции бани (#bath2, #bath3)
    // const modalForm = document.getElementById('bathPopUp')
    const close = document.querySelector(".closeForm");

    function openModal(modalForm) {
        // console.log('open modal');
        modalForm.style.display = "block";
        document.body.classList.add("lock");
        close.onclick = () => {
            console.log('close btn');
            modalForm.style.display = "none";
            document.body.classList.remove("lock");
        };

        window.onclick = (event) => {
            if (event.target === modalForm) {
                modalForm.style.display = "none";
                document.body.classList.remove("lock");
            }
        };
    }

    buttons.forEach((val) => {
        val.addEventListener("click", (e) => {
            e.preventDefault();
            switch (e.target.closest("section").id) {
                case "bath2":
                case "bath3":
                    openModal(document.getElementById("bathPopUp"));
                    break;
                case 'rooms':
                    if (e.target.closest(".rooms__card").id === 'room1') {
                        openModal(document.getElementById("room1PopUp"));
                    } else {
                        openModal(document.getElementById("room2PopUp"));
                    }
                    break;
                case 'laundry':
                    console.log('laundry popup');
                    
                    break;
                default:
                    console.log('no such section');
                    break;
            }
        });
    });
})();
