<?php

namespace omidsaifpanahi\converter;
use Yii;
/**
 * This is just an example.
 */
class Converter extends \yii\base\Widget
{
    public function persianDate($timestamp = null, $format = 'yyyy/MM/dd', $calenderLang = 'en-US', $calender = 'persian')
    {
        if ($timestamp == null) $timestamp = time();
        $fmt = datefmt_create($calenderLang . "@calendar=" . $calender, \IntlDateFormatter::FULL, \IntlDateFormatter::NONE, 'Asia/Tehran', \IntlDateFormatter::TRADITIONAL, $format);
        return $fmt->format($timestamp);
    }

    public function convertOnline()
    {
        $string = <<<ABC
   <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">تبدیل تاریخ و ساعت</button>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">تبدیل</h4>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#innerDate" aria-controls="innerDate" role="tab" data-toggle="tab" aria-expanded="true">
                            <i class="fa fa-calendar-minus-o"></i>تاریخ</a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#innerClock" aria-controls="innerClock" role="tab" data-toggle="tab" aria-expanded="false">
                            <i class="fa fa-clock-o"></i>ساعت</a>
                    </li>
                    <li role="presentation">
                        <a href="#innerRate" aria-controls="innerRate" role="tab" data-toggle="tab">
                            <i class="fa "></i>ارز</a>
                    </li>
                    <li role="presentation">
                        <a href="#innerWorldClock" aria-controls="innerWorldClock" role="tab" data-toggle="tab">
                            <i class="em em-online-convert-worldclock"></i>ساعت جهانی</a>
                    </li>
                    <li role="presentation">
                        <a href="#innerCalendar" aria-controls="innerCalendar" role="tab" data-toggle="tab">
                            <i class="em em-online-convert-calendar"></i>تقویم</a>
                    </li>
                </ul>

                <div class="tab-content" id="scrollable">
                    <div role="tabpanel" class="tab-pane active" id="innerDate">

                        <form id="convertForm" method="post">
                            <input id="csrf" name="_csrf-frontend" value="XsST7FwoEJ-m4vyHG1Sul0G54FKTFeM5AUwTR2CWCUQbsuOqGhxh5cCviKpKY8H9EeyyKvYjmQ1SE1kOJfQ8BQ==" type="hidden">
                            <input name="hidLanguage" id="hidLanguage" value="fa" type="hidden">
                            <div class="innerDateBox">
                                <div class="innerDateBoxCalendarType">
                                    <span>نوع تبدیل</span>
                                    <select id="convertType" onchange="convertDatePanel()">
                                        <option value="1" selected="selected"> شمسی به میلادی و قمری  </option>
                                        <option value="2"> میلادی به شمسی و قمری </option>
                                        <option value="3"> قمری به میلادی و شمسی     </option>
                                    </select>
                                </div>
                                <div class="innerDateBoxItem">
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <span>روز</span>
                                        <select class="" name="converterDay" id="converterDay">
                                            <option value="01">1</option>
                                            <option value="02">2</option>
                                            <option value="03">3</option>
                                            <option value="04">4</option>
                                            <option value="05">5</option>
                                            <option value="06">6</option>
                                            <option value="07">7</option>
                                            <option value="08" selected="selected">8</option>
                                            <option value="09">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <span>ماه</span>
                                        <select class="" name="converterMonth" id="converterMonth">
                                            <option value="01" selected="selected">فروردین</option>
                                            <option value="02">اردیبهشت</option>
                                            <option value="03">خرداد</option>
                                            <option value="04">تیر</option>
                                            <option value="05">مرداد</option>
                                            <option value="06">شهریور</option>
                                            <option value="07">مهر</option>
                                            <option value="08">آبان</option>
                                            <option value="09">آذر</option>
                                            <option value="10">دی</option>
                                            <option value="11">بهمن</option>
                                            <option value="12">اسفند</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <span>سال</span>
                                        <input class="" name="converterYear" id="converterYear" value="1397" placeholder="۱۳۹۷">
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <div class="button">
                                            <span></span>
                                            <input id="converterForm" class="timeBtn" value="تبدیل" type="button">
                                        </div>
                                    </div>
                                </div>
                                <div class="innerDateResult">
                                    <div class="row resultPersianDate">
                                        <div class="col-md-8 col-sm-8 col-xs-12">
                                            <span class="resultDay"> چهارشنبه- ۰۸ فروردین ۱۳۹۷ </span>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <span class="resultDate">۱۳۹۷/۰۱/۰۸</span>
                                        </div>
                                    </div>
                                    <div class="row resultEnglishDate">
                                        <div class="col-md-8 col-sm-8 col-xs-12">
                                            <span class="resultDay"> Wednesday- 28 March 2018</span>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <span class="resultDate">2018-03-28</span>
                                        </div>
                                    </div>
                                    <div class="row resultArabicDate">
                                        <div class="col-md-8 col-sm-8 col-xs-12">
                                            <span class="resultDay">الاحد-11رجب1439</span>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <span class="resultDate">11/ 7 /1439</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>


                    </div>
                    <div role="tabpanel" class="tab-pane" id="innerClock">

                        <div class="innerClockBox">
                            <div class="innerClockBoxItem">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <div class="innerClockName">ساعت ایران </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="innerClock">
                                        <span class="innerClockHH">09</span> :
                                        <span class="innerClockMM">21</span> :
                                        <span class="innerClockSS">34</span>
                                        <span class="innerClockType">am</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <div class="innerClockUTC">+3:30</div>
                                </div>
                            </div>
                            <div class="innerClockBoxItem">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <div class="innerClockName"> گرینویچ </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="innerClock">
                                        <span class="innerClockHH">04 </span> :
                                        <span class="innerClockMM">51</span> :
                                        <span class="innerClockSS">34</span>
                                        <span class="innerClockType">am</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <div class="innerClockUTC">+0:00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane " id="innerRate">


                        <div class="innerRateBox">
                            <div class="innerRateBoxItem">
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <span>مقدار</span>
                                    <input name="currency" id="currency" class="" type="input">
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <span>نوع ارز </span>
                                    <select name="currencyType" id="currencyType">
                                        <option value="" selected="selected"> </option>
                                        <option value="ریال">ریال(ایران)</option><option value="دلار">دلار</option><option value="EUR">یورو</option><option value="TRY">لیره ترکیه</option><option value="GFG">ناشناس</option><option value="REW">ناشناس</option><option value="AQA">ناشناس</option><option value="توما">تومان</option><option value="AUD">دلار استرالیا</option><option value="JPY">ین ژاپن</option><option value="GBP">پوند انگلستان</option><option value="CAD">دلار کانادا</option><option value="CHF">فرانک سوئیس</option><option value="">درهم</option>            </select>

                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <span>تبدیل به</span>
                                    <select name="currencyConvertTo" id="currencyConvertTo">
                                        <option value="" selected="selected"></option>
                                        <option value="ریال">ریال(ایران)</option><option value="دلار">دلار</option><option value="EUR">یورو</option><option value="TRY">لیره ترکیه</option><option value="GFG">ناشناس</option><option value="REW">ناشناس</option><option value="AQA">ناشناس</option><option value="توما">تومان</option><option value="AUD">دلار استرالیا</option><option value="JPY">ین ژاپن</option><option value="GBP">پوند انگلستان</option><option value="CAD">دلار کانادا</option><option value="CHF">فرانک سوئیس</option><option value="">درهم</option>            </select>

                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="button">
                                        <span></span>
                                        <input id="calculateCurrency" class="rateBtn" value="محاسبه" type="submit">
                                    </div>
                                </div>
                            </div>
                            <div class="innerRateResult" id="currencyRateResult">
                                <div class="rateResultBoxOrg"><span class="currency">0</span> <b class="rateResultUnit unit1"></b></div> =
                                <div class="rateResultBoxOrg"><span class="finalCurrency">0</span>  <b class="rateResultUnit unit2"></b></div>
                                <div class="innerhr"></div>
                                <div class="rateResultBox">1 <b class="rateResultUnit unit1"></b></div> =
                                <div class="rateResultBox"> <span class="firstCurrenyRate"></span>  <b class="rateResultUnit unit2"></b></div>
                                <div class="innerhr"></div>
                                <div class="rateResultBox">1 <b class="rateResultUnit unit2"></b></div> =
                                <div class="rateResultBox"><span class="secondCurrenyRate"></span> <b class="rateResultUnit unit1"></b></div>
                                <div class="rateResultText"> بر اساس آخرین نرخ در تاریخ<span> ۱۳۹۷/۰۱/۰۸</span> ساعت <span>09:34</span> به وقت تهران  </div>
                            </div>
                            <div id="showErrorCurrency" class="alert alert-danger text-center" style="display: none;"></div>
                        </div>                                    </div>
                    <div role="tabpanel" class="tab-pane " id="innerWorldClock">

                        <div class="innerWorldClockBox">
                            <div class="innerWorldClockBoxItem">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <div class="innerWorldClockName">ساعت جهانی </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="innerWorldClock">
                                        <span class="innerWorldClockHH">04</span> :
                                        <span class="innerWorldClockMM">51</span> :
                                        <span class="innerWorldClockSS">34</span>
                                        <span class="innerWorldClockType">am</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <div class="innerWorldClockUTC">+0:00</div>
                                </div>
                            </div>
                            <div class="innerWorldClockChange">
                                <span>نام Timezone   </span>
                                <select class="" name="timezoneSelection" id="timezoneSelection">
                                    <option value="" selected="selected">انتخاب از لیست </option>
                                    <option data-offset="+00:00" value="Zulu">Zulu</option><option data-offset="+03:00" value="Indian/Mayotte">Indian/Mayotte</option><option data-offset="+01:00" value="Poland">Poland</option><option data-offset="+02:00" value="Turkey">Turkey</option><option data-offset="âˆ’09:00" value="US/Alaska">US/Alaska</option><option data-offset="âˆ’10:00" value="US/Hawaii">US/Hawaii</option><option data-offset="âˆ’04:00" value="Chile/Continental">Chile/Continental</option><option data-offset="âˆ’03:00" value="Brazil/East">Brazil/East</option><option data-offset="âˆ’05:00" value="US/Michigan">US/Michigan</option><option data-offset="âˆ’06:00" value="US/Indiana-Starke">US/Indiana-Starke</option><option data-offset="âˆ’07:00" value="US/Mountain">US/Mountain</option><option data-offset="âˆ’04:30" value="America/Caracas">America/Caracas</option><option data-offset="âˆ’08:00" value="US/Pacific-New">US/Pacific-New</option><option data-offset="âˆ’02:00" value="Brazil/DeNoronha">Brazil/DeNoronha</option><option data-offset="âˆ’01:00" value="Atlantic/Cape_Verde">Atlantic/Cape_Verde</option><option data-offset="âˆ’03:30" value="Canada/Newfoundland">Canada/Newfoundland</option><option data-offset="+11:00" value="Pacific/Ponape">Pacific/Ponape</option><option data-offset="+05:00" value="Indian/Maldives">Indian/Maldives</option><option data-offset="+10:00" value="Pacific/Yap">Pacific/Yap</option><option data-offset="+12:00" value="Pacific/Wallis">Pacific/Wallis</option><option data-offset="+06:00" value="Indian/Chagos">Indian/Chagos</option><option data-offset="+04:00" value="W-SU">W-SU</option><option data-offset="+07:00" value="Indian/Christmas">Indian/Christmas</option><option data-offset="+08:00" value="Singapore">Singapore</option><option data-offset="+05:30" value="Asia/Kolkata">Asia/Kolkata</option><option data-offset="+09:00" value="ROK">ROK</option><option data-offset="+04:30" value="Asia/Kabul">Asia/Kabul</option><option data-offset="+05:45" value="Asia/Katmandu">Asia/Katmandu</option><option data-offset="+06:30" value="Indian/Cocos">Indian/Cocos</option><option data-offset="+03:30" value="Iran">Iran</option><option data-offset="+09:30" value="Australia/Yancowinna">Australia/Yancowinna</option><option data-offset="+08:45" value="Australia/Eucla">Australia/Eucla</option><option data-offset="+10:30" value="Australia/Lord_Howe">Australia/Lord_Howe</option><option data-offset="+12:45" value="Pacific/Chatham">Pacific/Chatham</option><option data-offset="+13:00" value="Pacific/Tongatapu">Pacific/Tongatapu</option><option data-offset="+14:00" value="Pacific/Kiritimati">Pacific/Kiritimati</option><option data-offset="âˆ’09:30" value="Pacific/Marquesas">Pacific/Marquesas</option><option data-offset="âˆ’11:00" value="US/Samoa">US/Samoa</option><option data-offset="+11:30" value="Pacific/Norfolk">Pacific/Norfolk</option>        </select>
                            </div>
                            <div class="innerWorldClockResult">
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <div class="innerWorldClockName">نام Timezone  </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="innerWorldClock">
                                        <span class="innerWorldClockHH" id="worldClockHH">00</span> :
                                        <span class="innerWorldClockMM" id="worldClockMM">00</span> :
                                        <span class="innerWorldClockSS" id="worldClockSS">00</span>
                                        <span class="innerWorldClockType" id="worldClockType">am</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <div class="innerWorldClockUTC" id="worldClockUTC">+0:00</div>
                                </div>
                            </div>
                        </div>                                    </div>
                    <div role="tabpanel" class="tab-pane " id="innerCalendar">

                        calendar
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
ABC;
        return $string;
    }
}

