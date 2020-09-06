if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
    const magneticMouseEvent = {

        power: {
            x: 20,
            y: 20,
        },

        events: [],
        ing: false,
        target: null,

        onInit() {


            const _this = this;

            //===
            var events = document.querySelectorAll('.btn');
            for (var i = 0; i < events.length; i++) {
                _this.events.push({
                    el: events[i],
                    enter: {
                        func: null,
                        event: null,
                    },
                    leave: {
                        func: null,
                        event: null,
                    },
                });
            }


            //===
            for (var i = 0; i < this.events.length; i++) {

                var v = this.events[i];

                v.enter.func = function (e) {
                    _this.target = e.target;
                    _this.ing = true;
                };
                v.enter.event = v.el.addEventListener('mouseenter', v.enter.func);

                v.leave.func = function (e) {
                    _this.onMouseLeave();
                    _this.ing = false;
                };
                v.leave.event = v.el.addEventListener('mouseleave', v.leave.func);

            }

        },


        onMouseMove(e) {

            //===
            if (this.ing && this.target) {
                const x = e.clientX;
                const y = e.clientY;
                const rect = this.target.getBoundingClientRect();
                const ax = ((x - rect.left) / rect.width - 0.5) * 2; // -1 ~ 1
                const ay = ((y - rect.top) / rect.height - 0.5) * 2; // -1 ~ 1
                const dx = (ax * 180) * Math.PI / 180;
                const dy = (ay * 180) * Math.PI / 180;
                gsap.to(this.target, {
                    duration: 0.4,
                    rotation: dx,
                    x: dx * this.power.x,
                    y: dy * this.power.y,
                });
            }

        },

        onMouseLeave() {
            gsap.to(this.target, {
                duration: 0.8,
                rotation: 0,
                x: 0,
                y: 0,
                ease: 'power2.out'
            });
        },

        onDestroy() {

            //===
            for (var i = 0; i < this.events.length; i++) {
                var v = this.events[i];
                v.el.removeEventListener('mouseenter', v.enter.func);
                v.el.removeEventListener('mouseleave', v.leave.func);
            }
            this.events = [];

            //===
            this.ing = false;

        }

    }


    magneticMouseEvent.onInit();
    window.addEventListener('mousemove', e => {
        magneticMouseEvent.onMouseMove(e);
    });

}



