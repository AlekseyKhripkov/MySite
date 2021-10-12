<?php

?>

<div class="shadow p-3 mb-5 bg-white rounded">
 <h1>Концепция MVC позволяет разделить модель, представление и контроллер на три отдельных компонента:</h1>
     <p><b> Модель</b></p>
     <p>Модель предоставляет данные и методы работы с ними: запросы в базу данных, проверка на корректность. Модель не зависит от представления (не знает как данные визуализировать) и контроллера (не имеет точек взаимодействия с пользователем), просто предоставляя доступ к данным и управлению ими.</p>
     <p>Модель строится таким образом, чтобы отвечать на запросы, изменяя своё состояние, при этом может быть встроено уведомление «наблюдателей».</p>
     <p>Модель, за счёт независимости от визуального представления, может иметь несколько различных представлений для одной «модели»</p>
     <p><b>Представление </b></p>
     <p>Представление отвечает за получение необходимых данных из модели и отправляет их пользователю. Представление не обрабатывает введённые данные пользователя [10].</p>
     <p><b>Контроллер</b></p>
     <p>Контроллер обеспечивает «связь» между пользователем и системой. Контролирует и направляет данные от пользователя к системе и наоборот. Использует модель и представление для реализации необходимого действия.</p></p>
</div>