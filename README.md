<p align="center">
  <img alt="logo" src="https://hsto.org/webt/nx/dq/jw/nxdqjwei9l_i_aa49ipmtjy42lw.png" width="80" height="80" />
</p>

# Вступление

PhpStorm не позволяет легко "шарить" настройки IDE между различными инстансами PhpStorm, поэтому - данный репозиторий хранит `jar`-файл с экспортированными настройками `code style` и шаблонов файлов.

# Использование

Для того, что бы импортировать настройки в свою IDE PhpStorm вам необходимо:

 * Перейти по **[данной ссылке][download_jar]** и скачать файл к себе на компуктер
 * Нажать **File | Import settings...**
 * В появившемся окне указать файл до скаченного ранее файла
 * Нажать **Select All** и **OK**

После этого ваши локальные настройки IDE будут автоматически замещены настройками из `jar`-файла.

Если найдете корректный *(и реально рабочий)* метод автоматизации данного процесса - пожалуйста, создайте issue с описанием в данном репозитории.

## Темы для IDE

Используемые темы находятся в директории `./themes` данного репозитория.

## Spell-checking

В данном репозитории так же хранится словарь для проверки правописания русского языка. Для его установки достаточно выполнить:

```shell
wget -O /tmp/russian.dic.zip https://github.com/avto-dev/idea-settings/raw/master/dicts/russian.dic.zip \
  && sudo unzip -d /usr/share/dict /tmp/russian.dic.zip \
  && sudo chmod 644 /usr/share/dict/russian.dic \
  && rm /tmp/russian.dic.zip
```

И в настройках IDE выполнить:

 * Нажать **File | Settings...**
 * Перейти **Editor > Spelling > Dictionaries**
 * В области **Custom Dictionaries Folder** нажать **+** и ввести путь `/usr/share/dict`, если он отсутствует в списке путей ниже

[download_jar]: https://github.com/avto-dev/idea-settings/raw/master/idea-settings.jar
