import Alpine from 'alpinejs';
import 'flowbite';
require('./bootstrap');

window.Alpine = Alpine;

queueMicrotask(() => {
    Alpine.start()
});

jQuery(function () {
    const browserTimezoneOffset = new Date().getTimezoneOffset();
    const expire = new Date();
    expire.setHours(23,59,59,999);
    const expirationDate = expire.toUTCString();
    document.cookie = `tz_offset=${browserTimezoneOffset}; expires=${expirationDate};path=/`;
});
