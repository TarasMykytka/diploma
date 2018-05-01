<?require_once('view/header.php');?>


    <div class="content">
        <div class="content__wraper">

            <?
            if(isset($data))
            {
                if($data[0][0] == 1)
                {
                    ?>
                    <form class="form" enctype="multipart/form-data"  accept-charset="utf-8">

                        <div class="lab__file_wrapper">
                            <h3 class="lab__file_title">Вибір файлу масиву данних</h3>
                            <input class="lab__file" id="data" name="data" type="file" accept=".csv">
                            <label for="data">
                                <span>Вибрати файл...</span>
                            </label>
                            <div class="lab__file_err">Виберіть файл</div>
                        </div>
                        <div class="lab__range_wrapper">
                            <h3 class="lab__range_title">Величина вибірки для тестування</h3>
                            <input class="lab__range" id="split" name="split" type="range" min="0.01" max="0.5" step="0.01" value="0.2">
                            <input type="text" class="lab__range_output" readonly value="0.2">
                        </div>
                        <div class="lab__num_wrapper">
                            <h3 class="lab__num_title">Кількість класів</h3>
                            <div class="lab__num_err">Введіть кількість класів</div>
                            <input class="lab__num" id="class" name="class" type="number" value="3">
                        </div>
                        <div class="lab__distance_wrapper">
                            <h3 class="lab__distance_title">Метод обчислення відстані</h3>
                            <select class="lab__distance" id="distance" name="distance">
                                <option value="Euclidean">Евклідовий</option>
                                <option value="Manhattan">Манхеттен</option>
                                <option value="Chebyshev">Чебушева</option>
                                <option value="Minkowski">Мінковського</option>
                            </select>
                        </div>
                        <div class="lab__num_wrapper">
                            <h3 class="lab__test-samples_title">Семпли для перевірки</h3>
                            <div class="lab__test-samples_count"></div>
                            <input class="lab__test-samples" id="test-samples" name="test-samples" type="text" value="">
                            <div class="lab__test-samples_err">Введіть коректно семпли</div>
                        </div>
                        <input id="lab_id" name="lab_id" type="hidden" value="<?=$data[0];?>">
                        <input class="lab__submit" type="submit" value="Почати тестування">
                    </form>
                    <div class="lab__result_wrapper">
                        <h3 class="lab__result_title">Точність для тестової вибірки</h3>
                        <table class="lab__result"></table>
                        <h3 class="lab__result_title">Результат передбачення</h3>
                        <div class="lab__result"></div>
                    </div>

                    <?
                }
                elseif($data[0][0] == 2)
                {
                    ?>
                    <form class="form" enctype="multipart/form-data"  accept-charset="utf-8">

                        <div class="lab__file_wrapper">
                            <h3 class="lab__file_title">Вибір файлу масиву данних</h3>
                            <input class="lab__file" id="data" name="data" type="file" accept=".csv">
                            <label for="data">
                                <span>Вибрати файл...</span>
                            </label>
                            <div class="lab__file_err">Виберіть файл</div>
                        </div>
                        <div class="lab__range_wrapper">
                            <h3 class="lab__range_title">Величина вибірки для тестування</h3>
                            <input class="lab__range" id="split" name="split" type="range" min="0.01" max="0.5" step="0.01" value="0.2">
                            <input type="text" class="lab__range_output" readonly value="0.2">
                        </div>
                        <div class="lab__num_wrapper">
                            <h3 class="lab__test-samples_title">Семпли для перевірки</h3>
                            <div class="lab__test-samples_count"></div>
                            <input class="lab__test-samples" id="test-samples" name="test-samples" type="text" value="">
                            <div class="lab__test-samples_err">Введіть коректно семпли</div>
                        </div>
                        <input id="lab_id" name="lab_id" type="hidden" value="<?=$data[0];?>">
                        <input class="lab__submit" type="submit" value="Почати тестування">
                    </form>
                    <div class="lab__result_wrapper">
                        <h3 class="lab__result_title">Точність для тестової вибірки</h3>
                        <table class="lab__result"></table>
                        <h3 class="lab__result_title">Результат передбачення</h3>
                        <div class="lab__result"></div>
                    </div>

                    <?
                }
                elseif($data[0][0] == 3)
                {
                    ?>
                    <form class="form" enctype="multipart/form-data"  accept-charset="utf-8">

                        <div class="lab__file_wrapper">
                            <h3 class="lab__file_title">Вибір файлу масиву данних</h3>
                            <input class="lab__file" id="data" name="data" type="file" accept=".csv">
                            <label for="data">
                                <span>Вибрати файл...</span>
                            </label>
                            <div class="lab__file_err">Виберіть файл</div>
                        </div>
                        <div class="lab__range_wrapper">
                            <h3 class="lab__range_title">Величина вибірки для тестування</h3>
                            <input class="lab__range" id="split" name="split" type="range" min="0.01" max="0.5" step="0.01" value="0.2">
                            <input type="text" class="lab__range_output" readonly value="0.2">
                        </div>
                        <div class="lab__kernel_wrapper">
                            <h3 class="lab__kernel_title">Вибір ядра</h3>
                            <select class="lab__kernel" id="kernel" name="kernel">
                                <option value="RBF">RBF</option>
                                <option value="POLYNOMIAL">POLYNOMIAL</option>
                                <option value="SIGMOID">SIGMOID</option>
                                <option value="LINEAR">LINEAR</option>
                            </select>
                        </div>
                        <div class="lab__cost_wrapper">
                            <h3 class="lab__cost_title">Cost</h3>
                            <input class="lab__cost" id="cost" name="cost" type="range" min="0" max="1000" step="100" value="500">
                            <input type="text" class="lab__cost_output" readonly value="500">
                        </div>
                        <div class="lab__num_wrapper">
                            <h3 class="lab__test-samples_title">Семпли для перевірки</h3>
                            <div class="lab__test-samples_count"></div>
                            <input class="lab__test-samples" id="test-samples" name="test-samples" type="text" value="">
                            <div class="lab__test-samples_err">Введіть коректно семпли</div>
                        </div>
                        <input id="lab_id" name="lab_id" type="hidden" value="<?=$data[0];?>">
                        <input class="lab__submit" type="submit" value="Почати тестування">
                    </form>
                    <div class="lab__result_wrapper">
                        <h3 class="lab__result_title">Точність для тестової вибірки</h3>
                        <table class="lab__result"></table>
                        <h3 class="lab__result_title">Результат передбачення</h3>
                        <div class="lab__result"></div>
                    </div>

                    <?
                }
                elseif($data[0][0] == 4)
                {
                    ?>
                    <form class="form" enctype="multipart/form-data"  accept-charset="utf-8">

                        <div class="lab__file_wrapper">
                            <h3 class="lab__file_title">Вибір файлу масиву данних</h3>
                            <input class="lab__file" id="data" name="data" type="file" accept=".csv">
                            <label for="data">
                                <span>Вибрати файл...</span>
                            </label>
                            <div class="lab__file_err">Виберіть файл</div>
                        </div>
                        <div class="lab__range_wrapper">
                            <h3 class="lab__range_title">Величина вибірки для тестування</h3>
                            <input class="lab__range" id="split" name="split" type="range" min="0.01" max="0.5" step="0.01" value="0.2">
                            <input type="text" class="lab__range_output" readonly value="0.2">
                        </div>
                        <div class="lab__num_wrapper">
                            <h3 class="lab__test-samples_title">Семпли для перевірки</h3>
                            <div class="lab__test-samples_count"></div>
                            <input class="lab__test-samples" id="test-samples" name="test-samples" type="text" value="">
                            <div class="lab__test-samples_err">Введіть коректно семпли</div>
                        </div>
                        <input id="lab_id" name="lab_id" type="hidden" value="<?=$data[0];?>">
                        <input class="lab__submit" type="submit" value="Почати тестування">
                    </form>
                    <div class="lab__result_wrapper">
                        <h3 class="lab__result_title">Пряма</h3>
                        <div class="lab__result"></div>
                        <h3 class="lab__result_title">Результат передбачення</h3>
                        <div class="lab__result"></div>
                    </div>

                    <?
                }
                elseif($data[0][0] == 5)
                {
                    ?>
                    <form class="form" enctype="multipart/form-data"  accept-charset="utf-8">

                        <div class="lab__file_wrapper">
                            <h3 class="lab__file_title">Вибір файлу масиву данних</h3>
                            <input class="lab__file" id="data" name="data" type="file" accept=".csv">
                            <label for="data">
                                <span>Вибрати файл...</span>
                            </label>
                            <div class="lab__file_err">Виберіть файл</div>
                        </div>
                        <div class="lab__range_wrapper">
                            <h3 class="lab__range_title">Величина вибірки для тестування</h3>
                            <input class="lab__range" id="split" name="split" type="range" min="0.01" max="0.5" step="0.01" value="0.2">
                            <input type="text" class="lab__range_output" readonly value="0.2">
                        </div>
                        <div class="lab__kernel_wrapper">
                            <h3 class="lab__kernel_title">Вибір ядра</h3>
                            <select class="lab__kernel" id="kernel" name="kernel">
                                <option value="RBF">RBF</option>
                                <option value="POLYNOMIAL">POLYNOMIAL</option>
                                <option value="SIGMOID">SIGMOID</option>
                                <option value="LINEAR">LINEAR</option>
                            </select>
                        </div>
                        <div class="lab__cost_wrapper">
                            <h3 class="lab__cost_title">Cost</h3>
                            <input class="lab__cost" id="cost" name="cost" type="range" min="0" max="1000" step="100" value="500">
                            <input type="text" class="lab__cost_output" readonly value="500">
                        </div>
                        <div class="lab__num_wrapper">
                            <h3 class="lab__test-samples_title">Семпли для перевірки</h3>
                            <div class="lab__test-samples_count"></div>
                            <input class="lab__test-samples" id="test-samples" name="test-samples" type="text" value="">
                            <div class="lab__test-samples_err">Введіть коректно семпли</div>
                        </div>
                        <input id="lab_id" name="lab_id" type="hidden" value="<?=$data[0];?>">
                        <input class="lab__submit" type="submit" value="Почати тестування">
                    </form>
                    <div class="lab__result_wrapper">
                        <h3 class="lab__result_title">Результат передбачення</h3>
                        <div class="lab__result"></div>
                    </div>

                    <?
                }
                elseif($data[0][0] == 6)
                {
                    ?>
                    <form class="form" enctype="multipart/form-data"  accept-charset="utf-8">

                        <div class="lab__file_wrapper">
                            <h3 class="lab__file_title">Вибір файлу масиву данних</h3>
                            <input class="lab__file" id="data" name="data" type="file" accept=".csv">
                            <label for="data">
                                <span>Вибрати файл...</span>
                            </label>
                            <div class="lab__file_err">Виберіть файл</div>
                        </div>
                        <div class="lab__clasters_wrapper">
                            <h3 class="lab__clasters_title">Кількість кластерів</h3>
                            <input class="lab__clasters" id="clasters" name="clasters" type="number" value="3">
                            <div class="lab__clasters_err">Введіть кількість кластерів</div>
                        </div>
                        <input id="lab_id" name="lab_id" type="hidden" value="<?=$data[0];?>">
                        <input class="lab__submit" type="submit" value="Почати тестування">
                    </form>
                    <div class="lab__result_wrapper">
                        <h3 class="lab__result_title">Результат класифікації</h3>
                        <table class="lab__result"></table>
                    </div>
                    </div>

                    <?
                }
            }
            ?>

        </div>
    </div>
<?require_once('view/footer.php');