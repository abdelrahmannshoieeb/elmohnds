class MinimogImageLoading extends HTMLElement{get intersecting(){return this.hasAttribute("intersecting")}constructor(){super(),this.img=this.querySelector("img"),this.observerCallback=this.observerCallback.bind(this),this.loadImage=this.loadImage.bind(this),this.img.onload=this.onLoad.bind(this),this.img.complete&&this.setLoadedStage()}connectedCallback(){"IntersectionObserver"in window?this.initIntersectionObserver():this.loadImage()}disconnectedCallback(){this.disconnectObserver()}loadImage(){this.setAttribute("intersecting","true")}onLoad(){this.setLoadedStage()}setLoadedStage(){this.removeAttribute("data-image-loading"),this.classList.add("m-img-loaded")}observerCallback(e,t){e[0].isIntersecting&&(t.unobserve(this),this.loadImage())}initIntersectionObserver(){this.observer||(this.observer=new IntersectionObserver(this.observerCallback,{rootMargin:"10px"}),this.observer.observe(this))}disconnectObserver(){this.observer&&(this.observer.disconnect(),this.observer=null,delete this.observer)}}class MinimogImage extends MinimogImageLoading{constructor(){super()}setLoadedStage(){this.removeAttribute("data-image-loading"),this.classList.add("m-img-loaded")}}customElements.define("m-image",MinimogImage);class MinimogBackgroundImage extends MinimogImageLoading{constructor(){super()}setLoadedStage(){this.removeAttribute("data-background-loading"),this.style.backgroundImage="url("+this.img.currentSrc+")",this.classList.add("m-background-loaded")}}customElements.define("m-background",MinimogBackgroundImage);