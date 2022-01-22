// Open Sidebar
const setup = () => {
    return {
        isSidebarOpen: false,
    };
};

// Enable and Disable Dark Mode
const toggleTheme = document.getElementById("toggle-theme");
const toggleIcon = document.getElementById("toggle-icon");

if ( localStorage.getItem("color-theme") === "dark" || (!("color-theme" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
    toggleIcon.classList.remove("fa-moon");
    toggleIcon.classList.add("fa-sun");
    document.documentElement.classList.add("dark");
    localStorage.setItem("colorTheme", "dark");    
} else {
    toggleIcon.classList.remove("fa-sun");
    toggleIcon.classList.add("fa-moon");
    document.documentElement.classList.remove("dark");
    localStorage.setItem("colorTheme", "light");
}

toggleTheme.addEventListener("click", () => {
    if ( localStorage.colorTheme === "dark" ) {
        toggleIcon.classList.remove("fa-sun");
        toggleIcon.classList.add("fa-moon");
        document.documentElement.classList.remove("dark");
        localStorage.setItem("colorTheme", "light");
    } else {
        toggleIcon.classList.remove("fa-moon");
        toggleIcon.classList.add("fa-sun");
        document.documentElement.classList.add("dark");
        localStorage.setItem("colorTheme", "dark");
    }
})