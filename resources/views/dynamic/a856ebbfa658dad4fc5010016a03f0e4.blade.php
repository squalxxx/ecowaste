<section class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 d-none d-sm-block">
                    <h3 class="adress_h3">Напишите нам</h3>
                    <p class="light small">
                        Вы можете отправить нам сообщение, используя форму ниже. Все сообщения
                        обрабатываются.
                    </p>

                    <div class="form__contacts">
                        <div class="moduletable">
                            <div class="custom">
                                <form
                                    action=""
                                    class="needs-validation question-form"
                                    method="POST"
                                    novalidate
                                >
                                    <input
                                        name="identity"
                                        type="hidden"
                                        value="contacts"
                                    >
                                    <input
                                        class="d-none"
                                        name="tel"
                                        type="tel"
                                    >

                                    <div class="form-row">
                                        <div class="form-group col-sm-6">
                                            <label for="name">Имя</label>
                                            <input
                                                class="form-control "
                                                id="name"
                                                name="name"
                                                placeholder="Ваше имя"
                                                type="text"
                                                value=""
                                            >

                                        </div>

                                        <div class="form-group col-sm-6">
                                            <label for="email">Эл. почта</label>
                                            <input
                                                class="form-control"
                                                id="email"
                                                name="email"
                                                placeholder="Ваш e-mail"
                                                required
                                                type="text"
                                                value=""
                                            >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="subject">Тема сообщения</label>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <select
                                                    class="form-control"
                                                    id="subject"
                                                    name="subject"
                                                >
                                                    <option selected>Утилизация отходов</option>
                                                    <option>Паспортизация отходов</option>
                                                    <option>Транспортные услуги</option>
                                                    <option>Сотрудничество</option>
                                                    <option>Другое</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="body">Сообщение</label>
                                        <textarea
                                            class="form-control"
                                            id="body"
                                            name="body"
                                            placeholder="Ваш вопрос"
                                            required
                                            rows="5"
                                        ></textarea>
                                        <div class="invalid-feedback">Какой ваш вопрос?</div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-check">
                                            <input
                                                checked
                                                class="form-check-input"
                                                id="agreement"
                                                name="agreement"
                                                required
                                                type="checkbox"
                                                value="1"
                                            >
                                            <label class="form-check-label" for="agreement">
                                                Согласен с <a href="" target="_blank">условиями
                                                    передачи данных</a>
                                            </label>
                                        </div>
                                    </div>

                                    <button class="btn btn-green" type="submit">Отравить вопрос</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 col-sm-offset-1">
                    <div class="adress">
                        <h3>Адрес</h3>
                        <p>{{ app('settings')->address }}</p>
                        <p>
                            <a href="mailto:{{ app('settings')->email }}">
                                {{ app('settings')->email }}
                            </a>
                        </p>

                        <p>{{ app('settings')->work_time }}</p>

                        <h3>Телефоны</h3>
                        <div class="phones-block">
                            <p>
                                Прием заявок/заказов
                                <br>
                                <br>
                                <a class="link" href="tel:{{ app('settings')->phone }}">
                                    {{ app('settings')->phone }}
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>