class MobileNavbar {
    constructor(mobileMenu, navList) {
        this.mobileMenu = document.querySelector(mobileMenu);
        this.navList = document.querySelector(navList);
        this.navLinks = document.querySelector(navLinks);
        this.activeClass = "active";
    }
}

addClickEvent() {
    this.mobileMenu.addClickEventlistener("click",() => console.log ("oioioi"));
    
}