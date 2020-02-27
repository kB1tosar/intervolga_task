<? include('header.php'); ?>
<div class="container mt-5 mb-5 pt-3 pb-3">
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
