<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <? include('front.php'); ?>
    <title>Второе задание</title>
</head>
<body>
<? include('header.php'); ?>
<div class="indents_body">
    <h1>Второе задание</h1>
    <h2>БД</h2>
    <p>На какой вопрос (сформулируйте по-русски) отвечает запрос:<br>
    SELECT avg(price)<br>
    FROM products inner join categories on id_category=categories.id<br>
    WHERE category.name="Планшеты";<br>
        пришлите ответ текстом</p><hr>
    <h3>Ответ:</h3>
    <p>Здесь происходит вывод среднего значения цен (avg(price)) всех продуктов(products) привязанных к категории(categories) планшеты(category.name="Планшеты")
    </p>
    <p>Или</p>
    <p>Выведет avg(price)(среднее арефмитическое значение цен строк "price"), из таблицы products,
        которая объединяется(внутрене) с таблицей categories по условию id_category и categories.id
        где category.name равна "Планшеты"
    </p>
</div>
<? include('footer.php'); ?>
</body>
</html>