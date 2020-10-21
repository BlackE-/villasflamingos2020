	console.log('%cBy @Studio-SUB', 'font-size: 14px;color: #000; border:1px solid #000;');
	/*		Start of Zopim Live Chat Script 		*/
    window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
    d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
    _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
    $.src="https://v2.zopim.com/?2WmvVkvK1FGKPGUqNrTgg2BqyfwgapU9";z.t=+new Date;$.
    type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
    
    $zopim(function() {
        $zopim.livechat.setLanguage('es');
    });



    /* 		End of Zopim Live Chat script 	*/

    //MENU
    const details = document.querySelectorAll("details.firstOrder");
    details.forEach((targetDetail) => {
      targetDetail.addEventListener("click", () => {
        details.forEach((detail) => {if (detail !== targetDetail) {detail.removeAttribute("open");}});
      });
    });
    const details2 = document.querySelectorAll("details.secondOrder");
    details2.forEach((targetDetail) => {
      targetDetail.addEventListener("click", () => {
        details2.forEach((detail) => {if (detail !== targetDetail) {detail.removeAttribute("open");}});
      });
    });

    gsap.registerPlugin(ScrollTrigger);
    gsap.to('#header', {scrollTrigger:{trigger: ".textContainerSection",scrub: 1},backgroundColor:"#000",duration:0.5});