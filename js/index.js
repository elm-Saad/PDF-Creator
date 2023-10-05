const themeToggle = document.getElementById("theme-toggle")
const body = document.body
const darkModeKey = "darkMode"
const defaultIcon = `<path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>`
const darkModeIcon = `<path
    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
    fill-rule="evenodd"
    clip-rule="evenodd"
    ></path>
`
const icon = themeToggle.querySelector("svg")


if (localStorage.getItem(darkModeKey)) {
    localStorage.getItem(darkModeKey) =='0'?
    lightModeStyle():DarkModeStyle()  
}

// Function to toggle dark mode
function toggleDarkMode() {

    // Toggle the moon/sun icon
    if (body.classList.contains("dark-mode")){
        lightModeStyle()
        saveDarkModePreference(false)
    } else {
        DarkModeStyle()
        saveDarkModePreference(true)
    }
    
}

// Function to save dark mode preference to local storage
function saveDarkModePreference(isDarkMode) {
    localStorage.setItem(darkModeKey, isDarkMode ? "1" : "0")
}

themeToggle.addEventListener("click", () => {
    toggleDarkMode()
})

function lightModeStyle(){
    body.classList.remove("dark-mode")
    body.classList.add("white-mode")
    icon.innerHTML = darkModeIcon
}

function DarkModeStyle(){
    body.classList.add("dark-mode")
    body.classList.remove("white-mode")
    icon.innerHTML = defaultIcon
}