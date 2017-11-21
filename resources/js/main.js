const menuButton = document.querySelector('.js-menu-btn')
const menuButtonOpen = document.querySelector('.js-menu-btn--open')
const menuButtonClose = document.querySelector('.js-menu-btn--close')
const menuItems = document.querySelector('.js-menu-items')

// let buttonState = false

menuButton.addEventListener('click', function() {
    return toggleMenu()
})

function toggleMenu() {
    menuButton.classList.toggle('text-blue')
    menuButton.classList.toggle('text-white')
    menuButton.classList.toggle('bg-white')
    menuButtonOpen.classList.toggle('hidden')
    menuButtonClose.classList.toggle('hidden')
    menuItems.classList.toggle('hidden')
}
