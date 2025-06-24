<div id="modalCallback" style="display: none; width: 100%; max-width: 800px">
    <h3 class="adress_h3">Оставить заявку</h3>
    <p class="light small">
        Вы можете оставить заявку, используя форму ниже. Все заявки обрабатываются.
    </p>

    <div class="form__contacts">
        <div class="moduletable">
            <div class="custom">
                <form
                    action="{{ route('admin.requests.store') }}"
                    class="needs-validation question-form"
                    method="POST"
                >
                    @csrf

                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label for="name">Имя</label>
                            <input
                                class="form-control @error('name') is-invalid @enderror"
                                id="name"
                                name="name"
                                placeholder="Ваше имя"
                                type="text"
                                value="{{ old('name', auth()->user()?->fullname ?? '') }}"
                            >
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="phone">Номер телефона</label>
                            <input
                                class="form-control @error('phone') is-invalid @enderror"
                                id="phone"
                                name="phone"
                                required
                                type="tel"
                                value="{{ old('phone', auth()->user()?->phone ?? '') }}"
                            >
                            @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="subject">Тема сообщения</label>
                        <div class="row">
                            <div class="col-sm-12">
                                <select
                                    class="form-control @error('subject') is-invalid @enderror"
                                    id="subject"
                                    name="subject"
                                >
                                    <option {{ old('subject') == 'Утилизация отходов' ? 'selected' : '' }}
                                        value="Утилизация отходов"
                                    >
                                        Утилизация отходов
                                    </option>
                                    <option {{ old('subject') == 'Паспортизация отходов' ? 'selected' : '' }}
                                        value="Паспортизация отходов"
                                    >
                                        Паспортизация отходов
                                    </option>
                                    <option {{ old('subject') == 'Транспортные услуги' ? 'selected' : '' }}
                                        value="Транспортные услуги"
                                    >
                                        Транспортные услуги
                                    </option>
                                    <option {{ old('subject') == 'Сотрудничество' ? 'selected' : '' }}
                                        value="Сотрудничество"
                                    >
                                        Сотрудничество
                                    </option>
                                    <option {{ old('subject') == 'Другое' ? 'selected' : '' }} value="Другое">Другое
                                    </option>
                                </select>
                                @error('subject')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message">Сообщение</label>
                        <textarea
                            class="form-control @error('message') is-invalid @enderror"
                            id="message"
                            name="message"
                            placeholder="Ваш вопрос"
                            rows="5"
                        >{{ old('message') }}</textarea>
                        @error('message')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input
                                {{ old('agreement') ? 'checked' : '' }}
                                class="form-check-input @error('agreement') is-invalid @enderror"
                                id="agreement"
                                name="agreement"
                                required
                                type="checkbox"
                                value="1"
                            >
                            <label class="form-check-label" for="agreement">
                                Согласен с <a href="#" target="_blank">условиями передачи данных</a>
                            </label>
                            @error('agreement')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <button class="btn btn-green" type="submit">Отправить вопрос</button>
                </form>
            </div>
        </div>
    </div>
</div>
