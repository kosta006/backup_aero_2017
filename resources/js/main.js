window.addEventListener('load', function() {
    var Turbolinks = require('turbolinks')

    function startMenu() {
        const menuButton = document.querySelector('.js-menu-btn')
        const menuButtonOpen = document.querySelector('.js-menu-btn--open')
        const menuButtonClose = document.querySelector('.js-menu-btn--close')
        const menuItems = document.querySelector('.js-menu-items')

        menuButton.addEventListener('click', function() {
            return toggleMenu()
        })

        function toggleMenu() {
            menuButton.classList.toggle(menuButton.dataset.text)
            menuButton.classList.toggle(menuButton.dataset.activeText)
            menuButton.classList.toggle(menuButton.dataset.activeBackground)
            menuButtonOpen.classList.toggle('hidden')
            menuButtonClose.classList.toggle('hidden')
            menuItems.classList.toggle('hidden')
        }
    }

    document.addEventListener('turbolinks:load', function() {
        startMenu()
    })

    Turbolinks.start()
    startMenu()

})

