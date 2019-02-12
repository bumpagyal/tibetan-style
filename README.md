# Tibetan-Style

This plugin is for the problem that WordPress default Tibetan font is too small on Windows system. When the user does not install any Tibetan font, "Noto Sans Tibetan" is used as the default font to display Tibetan, instead of "Microsoft Himalaya" font. If it is an operating system such as a Mac, the default font body of the system will be called.

此插件针对 Windows 系统里的 WordPress 后台默认藏文字体太小的问题，使用了 "Noto Sans Tibetan" 字体，并调用了本地 Google Fonts 文件，如果是 Mac 等操作系统，则会调用系统默认的藏文字体。

## 如何使用
下载本项目后，无需解压直接在WordPress后台添加插件并启用即可。

## 前端页面调用
启用此插件后，主题会自动调用本地Google Fonts文件，只要在您的主题样式表文件 style.css 里 font-family 属性添加 "Noto Sans Tibetan" 字体即可。

### 例如
```css
font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",Jomolhari,"TCRC Youtso Unicode","Tibetan Machine Uni","Monlam Uni Sans Serif","Qomolangma-Uchen Sarchung","Noto Sans Tibetan",sans-serif;
```