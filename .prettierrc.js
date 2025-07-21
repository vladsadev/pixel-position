module.exports = {
    plugins: ["prettier-plugin-tailwindcss"],
    semi: true,
    singleQuote: true,
    tabWidth: 2,
    trailingComma: "es5",
    overrides: [
        {
            files: "*.blade.php",
            options: {
                parser: "html",
                printWidth: 120,
            },
        },
        {
            files: ["*.js", "*.ts", "*.vue"],
            options: {
                parser: "babel",
            },
        },
    ],
};
