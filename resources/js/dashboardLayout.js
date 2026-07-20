//show and hide side-menu on small screen

const side_menu=document.getElementById('aside');
const body=document.getElementsByTagName('body');
const burger_btn=document.getElementById('burger-button');
const close_btn=document.getElementById('close-btn');

burger_btn.addEventListener('click',(e)=>{
    burger_btn.classList.add('hidden');
    side_menu.classList.remove('hidden');
    side_menu.classList.add('fixed', 'inset-0', 'z-50', 'w-full', 'h-full','bg-[#F8F6F1]');
})

close_btn.addEventListener('click',(e)=>{
    burger_btn.classList.remove('hidden');
    side_menu.classList.add('hidden');
    side_menu.classList.remove('fixed', 'inset-0', 'z-50', 'w-full', 'h-full','bg-[#1a1a1f]');
})




// add active-link to the clicked link

// 1. Grab your elements
const menu_links = document.querySelectorAll('.menu-items');
const active_section = document.getElementById('active-section');

// 2. Get the current URL path 
const currentPath = window.location.pathname;
// console.log(currentPath)
// 3. Loop through links to find which one matches the current page URL
menu_links.forEach((link) => {
    // Get the href attribute from the inner anchor tag
    const anchor = link.querySelector('a');
    const linkPath = anchor ? anchor.getAttribute('href') : '';

    // console.log(anchor)
    // console.log(linkPath)
    // console.log(currentPath)
    // Remove any hardcoded active classes first to prevent duplicates
    link.classList.remove('active-link');

    // Check if the link's path matches the browser's current path
    if (currentPath === linkPath) {
        // Set the active class on the matching list item
        link.classList.add('active-link');

        // Update the top header text to show the current section name
        if (active_section) {
            active_section.textContent = link.dataset.target.replace('/', '');
            active_section.classList.add('uppercase');
        }
    }
});
