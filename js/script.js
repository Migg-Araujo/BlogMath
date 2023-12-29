var checkbox = document.getElementById('theme-checkbox');

checkbox.addEventListener('change', function() {          
    localStorage.setItem('checkboxState', checkbox.checked);
});

var savedCheckboxState = localStorage.getItem('checkboxState');

if (savedCheckboxState !== null) {
    checkbox.checked = savedCheckboxState === 'true';
    changeTheme();
}

function changeTheme(){
    var root = document.documentElement;
    var checkBox = document.getElementById('theme-checkbox');

    if(checkBox.checked){
        root.style.setProperty('--color-background', '#1E1E1E');
        root.style.setProperty('--color-background2', '#242424');
        root.style.setProperty('--color-nav', '#202020');
        root.style.setProperty('--color-search', '#2D2D2D');
        root.style.setProperty('--color-a', 'white');
        root.style.setProperty('--color-a-hover', 'white');
        root.style.setProperty('--color-text', 'white');
        root.style.setProperty('--menu', "url('../src/menu-black.svg')");
        root.style.setProperty('--user', "url('../src/user-black.svg')");
        root.style.setProperty('--icon', "url('../src/icon-black.svg')");
        root.style.setProperty('--purple-background', "#4A3692");
        root.style.setProperty('--purple-input', "#342666");
    }else{
        root.style.setProperty('--color-background', 'white');
        root.style.setProperty('--color-background2', '#E7E7E7');
        root.style.setProperty('--color-nav', '#F3F3F3');
        root.style.setProperty('--color-search', '#D9D9D9');
        root.style.setProperty('--color-a', '#B4B4B4');
        root.style.setProperty('--color-a-hover', '#727272');
        root.style.setProperty('--color-text', 'black');
        root.style.setProperty('--menu', "url('../src/menu-white.svg')");
        root.style.setProperty('--user', "url('../src/user-white.svg')");
        root.style.setProperty('--icon', "url('../src/icon-white.svg')");
        root.style.setProperty('--purple-background', "#543BAF");
        root.style.setProperty('--purple-input', "#7662BF");
    }
}