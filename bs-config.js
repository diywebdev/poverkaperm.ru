module.exports = {
  proxy: "http://poverkaperm.loc/", // URL вашего локального PHP-сервера
  files: [
    "**/*.php",   // Отслеживание изменений в PHP-файлах
    "**/*.js",    // Отслеживание изменений в JS-файлах
    "css/styles.css",  // Отслеживание изменений в скомпилированных CSS-файлах
    "css/main.css"
    
  ],
  browser: "default", // Использование браузера по умолчанию
  port: 3000,         // Порт для Browsersync
  open: true,        // Открывать браузер автоматически
  notify: false       // Отключение уведомлений в браузере
};
