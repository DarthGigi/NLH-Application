// Select the button
const btn = document.querySelector(".btn-toggle");
// Check for dark mode preference at the OS level
const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");
// Select the stylesheet <link>
const theme = document.querySelector("#theme-link");

// Get the user's theme preference from local storage, if it's available
const currentTheme = localStorage.getItem("theme");
// If the user's preference in localStorage is dark...
if (currentTheme == "dark") {
    // ... then switch it to "assets/css/dark.css"
    theme.href = "assets/css/dark.css";
// Otherwise, if the user's preference in localStorage is light...
} else if (currentTheme == "light") {
    // ... switch it to "assets/css/light.css"
    theme.href = "assets/css/light.css";
}

// Listen for a click on the button 
// Listen for a click on the button
btn.addEventListener("click", function() {
  // If the current URL contains "ligh-theme.css"
  if (theme.getAttribute("href") == "assets/css/light.css") {
    // ... then switch it to "assets/css/dark.css"
    theme.href = "assets/css/dark.css";
  // Otherwise...
  } else {
    // ... switch it to "assets/css/light.css"
    theme.href = "assets/css/light.css";
  }
});