<section class="container calculator-section calculator-first">
    <div class="m-t-144">
        <h2 class="fira-bold font-55 text-center kfn_anim k-fadeUp">გამოთვალე ტარიფი</h2>
        <div class="calculator-container kfn_anim k-fadeUp">
            <form action="" class="flex-box column">
                <div class="radio-buttons flex-box justify-center">
                    <label class="radio-button">სრული
                        <input type="radio" checked="checked" name="radio">
                        <span class="checkmark"></span>
                    </label>
                    <label class="radio-button">ნაწილობრივი
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="other-inputs flex-box">
                    <div class="flex-box column product-price">
                        <p class="noto-bold">ავტომობილის ღირებულება</p>
                        <div class="input-box flex-box">
                            <input type="number" name="price" placeholder="0.00">
                            <div class="currency-box box-1 flex-box al-center">
                                <div class="currency-stick"></div>
                                <div class="currency-tab gel flex-box al-center justify-center noto-bold current">₾
                                </div>
                                <div class="currency-tab usd flex-box al-center justify-center noto-bold">$</div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-box">
                        <div class="flex-box column select-box1">
                            <p class="noto-bold">ავტომობილის ტიპი</p>
                            <div class="custom-select">
                                <input type="hidden" class="hidden-form-field" name="reason">
                                <select>
                                    <option value="1">მოდელი</option>
                                    <option value="2">სედანი</option>
                                    <option value="3">ჰეჩბეკი</option>
                                    <option value="3">ჯიპი</option>
                                    <option value="3">სხვა</option>
                                    <option value="2">სედანი</option>
                                    <option value="3">ჰეჩბეკი</option>
                                    <option value="3">ჯიპი</option>
                                    <option value="3">სხვა</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex-box column select-box2">
                            <p class="noto-bold">გამოშვების წელი</p>
                            <div class="custom-select">
                                <input type="hidden" class="hidden-form-field" name="reason">
                                <select>
                                    <option value="1">წელი</option>
                                    <option value="2">1990</option>
                                    <option value="3">1991</option>
                                    <option value="3">1992</option>
                                    <option value="3">1993</option>
                                    <option value="2">1994</option>
                                    <option value="3">1995</option>
                                    <option value="3">1996</option>
                                    <option value="3">1997</option>
                                    <option value="3">1998</option>
                                    <option value="3">1999</option>
                                    <option value="3">2000</option>
                                    <option value="3">2001</option>
                                    <option value="3">2002</option>
                                    <option value="3">2003</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="calculator-bottom">
                    <div class="btn calculate-btn white" id="calculator1btn">გამოთვლა</div>
                    <div class="calculated text-center" id="calculated1">
                        <div class="noto-bold">თვიური გადასახადი:</div>
                        <div class="result noto-bold font-34 color-prim">3.62₾</div>
                        <a href="#" class="btn-white">დავეზღვევი</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
