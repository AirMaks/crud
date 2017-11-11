<div class="row">
    <div class="col-sm-12">
        <div style="margin: 30px">
            <h1>Товары</h1>

            <table class="table">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Фото</td>
                    <td>Категория</td>
                    <td>Описание</td>
                    <td>Цена</td>
                    <td>Редактировать</td>
                    <td>Дата создания</td>
                    <td>Дата редактирования</td>
                    <td>Перейти</td>
                    <td>Удалить</td>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td><a href="products//view_product"><img src="http://localhost/crud/public/products_images/ " width="40px"></a></td>
                    <td></td>
                    <td><h4></h4></td>
                    <td><h4></h4></td>
                    <td><h4></h4></td>

                    <td>
                        <a hidden href="products//update_product">
                            Редактировать
                        </a>
                    </td>
                    <td><h4></h4></td>


                    <td>
                        <form hidden action="products//delete" method="POST">

                            <button class="btn btn-danger" type="submit" name="delete_product">Удалить</button>


                        </form>
                    </td>
                </tr>

                </tbody>
            </table>


            <!-- Trigger the modal with a button -->
            <button  type="button" data-toggle="modal" data-target="#mymodal"
                     class="btn btn-block btn-lg">
                Добавить
            </button>
            <!-- Modal -->


            <div class="modal fade" id="mymodal" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">

                <div class="modal-dialog">
                    <!-- Modal content-->

                    <div class="modal-content">

                        <div class="modal-header">

                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Добавить новый товар</h4>
                        </div>
                        <div class="modal-body">
                            <div style="margin-top: 20px" class="col-sm-6">


                                <form enctype="multipart/form-data" action="products/create" class="form-group"
                                      method="post">

                                    <p><input type="file" name="image" required></p>
                                    <p><input minlength="2" maxlength="15" id="mw1" class="form-control" type="text" name="category" placeholder="Категория" required></p>
                                    <p><input minlength="2" maxlength="15" id="mw1" class="form-control" type="text" name="description" placeholder="Описание" required></p>
                                    <p><input minlength="2" maxlength="15" id="mw1" class="form-control" type="text" name="price" placeholder="Цена" required></p>



                                    <button id="mw1" class="btn btn-primary" type="submit">Добавить</button>
                                    <button id="mw1" type="button" class="btn btn-default" data-dismiss="modal">
                                        Отмена
                                    </button>

                                </form>

                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $(document).ready(function () {
                    $("#mybtn").click(function () {
                        $("#mymodal").modal();
                    });
                });
            </script>

        </div>
    </div>