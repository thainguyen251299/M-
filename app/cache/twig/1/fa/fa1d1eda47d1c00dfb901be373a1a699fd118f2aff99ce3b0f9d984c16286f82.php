<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/agenda/month.tpl */
class __TwigTemplate_8c964a7fc68749714403a6d15e7c92c208c8f748b38ef475e1542df779064bf0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<style>
.fc-day-grid-event > .fc-content {
    white-space: normal;
}
</style>
<script>
function checkLength( o, n, min, max ) {
    if ( o.val().length > max || o.val().length < min ) {
        o.addClass( \"ui-state-error\" );
        /*updateTips( \"Length of \" + n + \" must be between \" +
            min + \" and \" + max + \".\" );*/
        return false;
    } else {
        return true;
    }
}
function clean_user_select() {
    //Cleans the selected attr
    \$(\"#users_to_send\").val('').trigger(\"chosen:updated\");
}

var region_value = '";
        // line 22
        echo ($context["region_value"] ?? null);
        echo "';

\$(function() {
    var cookieData = Cookies.getJSON('agenda_cookies');
    var defaultView = (cookieData && cookieData.view) || '";
        // line 26
        echo ($context["default_view"] ?? null);
        echo "';
    var defaultStartDate = (cookieData && cookieData.start) || moment.now();

    // Reset button.
    \$(\"button[type=reset]\").click(function() {
        \$(\"#session_id\").find('option').removeAttr(\"selected\");
    });

\t\$(\"#dialog-form\").dialog({
\t\tautoOpen : false,
\t\tmodal : false,
\t\twidth : 600,
\t\theight : 580,
        zIndex : 20000 // added because of qtip2
   \t});

    \$(\"#simple-dialog-form\").dialog({
\t\tautoOpen : false,
\t\tmodal : false,
\t\twidth : 600,
\t\theight : 550,
        zIndex : 20000 // added because of qtip2
   \t});

\tvar title = \$(\"#title\"),
\tcontent = \$(\"#content\"),
\tallFields = \$([]).add( title ).add( content ), tips = \$(\".validateTips\");

    \$(\"#select_form_id_search\").change(function() {
        var temp =\"&user_id=\"+\$(\"#select_form_id_search\").val();
        var position =String(window.location).indexOf(\"&user\");
        var url = String(window.location).substring(0,position)+temp;
        if (position > 0) {
            window.location.replace(url);
        } else {
            url = String(window.location)+temp;
            window.location.replace(url);
        }
    });

    var CustomListViewGrid  = ListViewGrid.extend({
        fgSegHtml: function(seg) {
            var view = this.view;
            var classes = [ 'fc-list-item' ].concat(this.getSegCustomClasses(seg));
            var bgColor = this.getSegBackgroundColor(seg);
            var event = seg.event;
            var url = event.url;
            var timeHtml;

            if (event.allDay) {
                timeHtml = view.getAllDayHtml();
            }
            else if (view.isMultiDayEvent(event)) { // if the event appears to span more than one day
                if (seg.isStart || seg.isEnd) { // outer segment that probably lasts part of the day
                    timeHtml = htmlEscape(this.getEventTimeText(seg));
                }
                else { // inner segment that lasts the whole day
                    timeHtml = view.getAllDayHtml();
                }
            }
            else {
                // Display the normal time text for the *event's* times
                timeHtml = htmlEscape(this.getEventTimeText(event));
            }

            if (url) {
                classes.push('fc-has-url');
            }

            return '<tr class=\"' + classes.join(' ') + '\">' +
                (this.displayEventTime ?
                    '<td class=\"fc-list-item-time ' + view.widgetContentClass + '\">' +
                        (timeHtml || '') +
                    '</td>' :
                    '') +
                '<td class=\"fc-list-item-marker ' + view.widgetContentClass + '\">' +
                    '<span class=\"fc-event-dot\"' +
                    (bgColor ?
                        ' style=\"background-color:' + bgColor + '\"' :
                        '') +
                    '></span>' +
                '</td>' +
                '<td class=\"fc-list-item-title ' + view.widgetContentClass + '\">' +
                    '<a' + (url ? ' href=\"' + htmlEscape(url) + '\"' : '') + '>' +
                        htmlEscape(seg.event.title || '') + (seg.event.description || '')
                    '</a>' +
                '</td>' +
            '</tr>';
        },

        // render the event segments in the view
        renderSegList: function(allSegs) {
            var segsByDay = this.groupSegsByDay(allSegs); // sparse array
            var dayIndex;
            var daySegs;
            var i;
            var tableEl = \$('<table class=\"fc-list-table\"><tbody/></table>');
            var tbodyEl = tableEl.find('tbody');
            var eventList = new Array;
            for (dayIndex = 0; dayIndex < segsByDay.length; dayIndex++) {
                daySegs = segsByDay[dayIndex];
                if (daySegs) { // sparse array, so might be undefined
                    this.sortEventSegs(daySegs);
                    for (i = 0; i < daySegs.length; i++) {
                        var event = daySegs[i].event;
                        if (jQuery.inArray(event.id, eventList) !== -1) {
                            continue;
                        }
                        eventList.push(event.id);
                         // append a day header
                        tbodyEl.append(this.dayHeaderHtml(
                            this.view.start.clone().add(dayIndex, 'days'),
                            event
                        ));

                        tbodyEl.append(daySegs[i].el); // append event row
                    }
                }
            }

            this.el.empty().append(tableEl);
        },
        // generates the HTML for the day headers that live amongst the event rows
        dayHeaderHtml: function(dayDate, event) {
            var view = this.view;
            var mainFormat = 'LL';
            var altFormat = 'dddd';
            var checkIfSame = true;
            if (event.end) {
                checkIfSame = event.end.format(mainFormat) == dayDate.format(mainFormat);
            }

            return '<tr class=\"fc-list-heading\" data-date=\"' + dayDate.format('YYYY-MM-DD') + '\">' +
                '<td class=\"' + view.widgetHeaderClass + '\" colspan=\"3\">' +
                    (mainFormat ?
                        view.buildGotoAnchorHtml(
                            dayDate,
                            { 'class': 'fc-list-heading-main' },
                            htmlEscape(dayDate.format(mainFormat)) // inner HTML
                        ) :
                        '') +

                      ((checkIfSame == false && mainFormat) ?
                        view.buildGotoAnchorHtml(
                            dayDate,
                            { 'class': 'fc-list-heading-main' },
                            '&nbsp;-&nbsp; ' + htmlEscape(event.end.format(mainFormat)) // inner HTML
                        ) :
                        '') +

                    (altFormat ?
                        view.buildGotoAnchorHtml(
                            dayDate,
                            { 'class': 'fc-list-heading-alt' },
                            htmlEscape(dayDate.format(altFormat)) // inner HTML
                        ) :
                        '') +
                '</td>' +
            '</tr>';
        },
    });

\tvar FC = \$.fullCalendar; // a reference to FullCalendar's root namespace
    var View = ListView;      // the class that all views must inherit from
    var CustomView;          // our subclass

    CustomView = View.extend({ // make a subclass of View
        initialize: function() {
            this.grid = new CustomListViewGrid(this);
            this.scroller = new Scroller({
                overflowX: 'hidden',
                overflowY: 'auto'
            });
        }
    });

    FC.views.CustomView = CustomView; // register our class with the view system
    var height = '';
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        height = 'auto';
    }

\tvar calendar = \$('#calendar').fullCalendar({
        height: height,
\t\theader: {
\t\t\tleft: 'today,prev,next',
\t\t\tcenter: 'title',
\t\t\tright: 'month,agendaWeek,agendaDay,CustomView'
\t\t},
        views: {
            CustomView: { // name of view
                type: 'list',
                buttonText: '";
        // line 218
        echo twig_escape_filter($this->env, get_lang("AgendaList"), "js");
        echo "',
                duration: { month: 1 },
                defaults: {
                    'listDayAltFormat': 'dddd' // day-of-week is nice-to-have
                }
            },
            month: {
                'displayEventEnd' : true
            }
        },
        locale: region_value,
        ";
        // line 229
        if ((($context["use_google_calendar"] ?? null) == 1)) {
            // line 230
            echo "            eventSources: [
                // if you want to add more just add URL in this array
                '";
            // line 232
            echo ($context["google_calendar_url"] ?? null);
            echo "',
                {
                    className: 'gcal-event' // an option!
                }
            ],
        ";
        }
        // line 238
        echo "        defaultView: defaultView,
        defaultDate: defaultStartDate,
        firstHour: 8,
        firstDay: 1,
        ";
        // line 242
        if (($context["fullcalendar_settings"] ?? null)) {
            // line 243
            echo "            ";
            echo ($context["fullcalendar_settings"] ?? null);
            echo "
        ";
        }
        // line 245
        echo "        selectable\t: true,
\t\tselectHelper: true,
        viewDisplay: function(view) {
            /* When changing the view update the qtips */
            /*var api = \$('.qtip').qtip('api'); // Access the API of the first tooltip on the page
            if (api) {
                api.destroy();
                //api.render();
            }*/
        },
        viewRender: function(view, element) {
            var data = {
                'view': view.name,
                'start': view.intervalStart.format(\"YYYY-MM-DD\")
            };
            Cookies.set('agenda_cookies', data, 1); // Expires 1 day
        },
\t\t// Add event
\t\tselect: function(start, end, jsEvent, view) {
            var diffDays = moment(end).diff(start, 'days');

            var allDay = true;
            if (end.hasTime()) {
                allDay = false;
            }

\t\t\t\$('#visible_to_input').show();
\t\t\t\$('#add_as_announcement_div').show();
\t\t\t\$('#visible_to_read_only').hide();

\t\t\t// Cleans the selected attr
\t\t    clean_user_select();

            // Sets the 1st item selected by default
            \$('#users_to_send option').eq(0).attr('selected', 'selected');

\t\t\t// Update chz-select
\t\t\t//\$(\"#users_to_send\").trigger(\"chosen:updated\");
\t\t\tif (";
        // line 283
        echo ($context["can_add_events"] ?? null);
        echo " == 1) {
\t\t\t    var startEn = start.clone().locale('en'),
                    endEn = end.clone().locale('en');

\t\t\t\tvar url = '";
        // line 287
        echo ($context["web_agenda_ajax_url"] ?? null);
        echo "&a=add_event&start='+startEn.format(\"YYYY-MM-DD HH:mm:00\")+'&end='+endEn.format(\"YYYY-MM-DD HH:mm:00\")+'&all_day='+allDay+'&view='+view.name;
\t\t\t    var start_date_value = start.format('";
        // line 288
        echo ($context["js_format_date"] ?? null);
        echo "');
                \$('#start_date').html(start_date_value);

                if (diffDays > 1) {
                    \$('#start_date').html('');
                    var end_date_value = '';
                    if (end) {
                        var clone = end.clone();
                        end_date_value = clone.subtract(1, 'days').format('";
        // line 296
        echo ($context["js_format_date"] ?? null);
        echo "');
                    }
                    \$('#end_date').html(start_date_value + \" - \" + end_date_value);
                } else if (diffDays == 0) {
                    var start_date_value = start.format('ll');
                    var startTime = start.format('LT');
                    var endTime = end.format('LT');
                    \$('#start_date').html('');
                    \$('#end_date').html(start_date_value + \" (\" + startTime + \" - \" + endTime+\") \");
                } else {
                    \$('#end_date').html('');
                }

\t\t\t\t\$('#color_calendar')
                    .html('";
        // line 310
        echo twig_escape_filter($this->env, ($context["type_label"] ?? null), "js");
        echo "')
                    .removeClass('group_event')
                    .addClass('label_tag')
                    .addClass('";
        // line 313
        echo twig_escape_filter($this->env, ($context["type_event_class"] ?? null), "js");
        echo "')
                    .css('background-color', '";
        // line 314
        echo ($context["type_event_color"] ?? null);
        echo "');

                //It shows the CKEDITOR while Adding an Event
                \$('#cke_content').show();
                //It Fixing a minor bug with textarea ckeditor.remplace
                \$('#content').css('display','none');
                //Reset the CKEditor content that persist in memory
                CKEDITOR.instances['content'].setData('');
\t\t\t\tallFields.removeClass(\"ui-state-error\");
\t\t\t\t\$(\"#dialog-form\").dialog(\"open\");
\t\t\t\t\$(\"#dialog-form\").dialog({
\t\t\t\t\tbuttons: {
\t\t\t\t\t\t'";
        // line 326
        echo get_lang("Add");
        echo "' : function() {
\t\t\t\t\t\t\tvar bValid = true;
\t\t\t\t\t\t\tbValid = bValid && checkLength(title, \"title\", 1, 255);

                            //Update the CKEditor Instance to the remplaced textarea, ready to be serializable
                            for ( instance in CKEDITOR.instances ) {
                                CKEDITOR.instances[instance].updateElement();
                            }

\t\t\t\t\t\t\tvar params = \$(\"#add_event_form\").serialize();

\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\turl: url+'&'+params,
\t\t\t\t\t\t\t\tsuccess:function(data) {
\t\t\t\t\t\t\t\t\tvar user = \$('#users_to_send').val();
                                    if (user) {
                                        if (user.length > 1) {
                                            user = 0;
                                        } else {
                                            user = user[0];
                                        }
                                        var user_length = String(user).length;
                                        if (String(user).substring(0,1) == 'G') {
                                            var user_id = String(user).substring(6,user_length);
                                            var user_id = \"G:\"+user_id;
                                        } else {
                                            var user_id = String(user).substring(5,user_length);
                                        }
                                        var temp = \"&user_id=\"+user_id;
                                        var position = String(window.location).indexOf(\"&user\");
                                        var url = String(window.location).substring(0, position)+temp;
                                        /*if (position > 0) {
                                            window.location.replace(url);
                                        } else {
                                            url = String(window.location)+temp;
                                            window.location.replace(url);
                                        }*/
                                    }

                                    \$(\"#title\").val('');
                                    \$(\"#content\").val('');
                                    \$(\"#comment\").val('');

                                    calendar.fullCalendar('refetchEvents');
                                    calendar.fullCalendar('rerenderEvents');

\t\t\t\t\t\t\t\t\t\$(\"#dialog-form\").dialog('close');
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\tclose: function() {
                        \$(\"#title\").val('');
                        \$(\"#content\").val('');
                        \$(\"#comment\").val('');
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\tcalendar.fullCalendar('unselect');
                //Reload events
                calendar.fullCalendar(\"refetchEvents\");
                calendar.fullCalendar(\"rerenderEvents\");
\t\t\t}
\t\t},
\t\teventRender: function(event, element) {
            if (event.attachment) {
                /*element.qtip({
                    hide: {
                        delay: 2000
                    },
\t\t            content: event.attachment,
\t\t            position: { at:'top right' , my:'bottom right'}
\t\t        }).removeData('qtip'); // this is an special hack to add multiple qtip in the same target
\t\t        */
            }

            var onHoverInfo = '';
            ";
        // line 403
        if ($this->getAttribute(($context["on_hover_info"] ?? null), "description", [])) {
            // line 404
            echo "                if (event.description) {
                    onHoverInfo = event.description;
                }
            ";
        }
        // line 408
        echo "
            ";
        // line 409
        if ($this->getAttribute(($context["on_hover_info"] ?? null), "comment", [])) {
            // line 410
            echo "                if (event.comment) {
                    onHoverInfo = onHoverInfo + event.comment;
                }
            ";
        }
        // line 414
        echo "
            if (onHoverInfo) {
                element.qtip({
                    content: onHoverInfo,
                    position: {
                        at: 'top center',
                        my: 'bottom center',
                        viewport: \$(window)
                    }
                });
\t\t\t}
\t    },
\t\teventClick: function(calEvent, jsEvent, view) {
            var start = calEvent.start;
            var end = calEvent.end;
            var diffDays = moment(end).diff(start, 'days');
            var endDateMinusOne = '';

            // If event is not editable then just return the qtip
            if (!calEvent.editable) {
                var onHoverInfo = '';
                ";
        // line 435
        if ($this->getAttribute(($context["calEvent"] ?? null), "description", [])) {
            // line 436
            echo "                if (calEvent.description) {
                    onHoverInfo = calEvent.description;
                }
                ";
        }
        // line 440
        echo "                ";
        if ($this->getAttribute(($context["on_hover_info"] ?? null), "comment", [])) {
            // line 441
            echo "                if (calEvent.comment) {
                    onHoverInfo = onHoverInfo + calEvent.comment;
                }
                ";
        }
        // line 445
        echo "
                if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                    \$(this).qtip({
                        overwrite: false,
                        show: {ready: true},
                        content: onHoverInfo,
                        position: {
                            at: 'top center',
                            my: 'bottom center',
                            viewport: \$(window)
                        }
                    });

                    return;
                }
            }

            if (end) {
                var clone = end.clone();
                endDateMinusOne = clone.subtract(1, 'days').format('";
        // line 464
        echo ($context["js_format_date"] ?? null);
        echo "');
            }
            var startDateToString = start.format(\"";
        // line 466
        echo ($context["js_format_date"] ?? null);
        echo "\");

\t\t\t// Edit event.
\t\t\tif (calEvent.editable) {
\t\t\t\t\$('#visible_to_input').hide();
                \$('#add_as_announcement_div').hide();
                ";
        // line 472
        if ((($context["type"] ?? null) != "admin")) {
            // line 473
            echo "                    \$('#visible_to_read_only').show();
                    \$(\"#visible_to_read_only_users\").html(calEvent.sent_to);
\t\t\t\t";
        }
        // line 476
        echo "
                \$('#color_calendar').html('";
        // line 477
        echo twig_escape_filter($this->env, ($context["type_label"] ?? null), "js");
        echo "');
                \$('#color_calendar').addClass('label_tag');
                \$('#color_calendar').removeClass('course_event');
                \$('#color_calendar').removeClass('personal_event');
                \$('#color_calendar').removeClass('group_event');
                \$('#color_calendar').addClass(calEvent.type+'_event');

                // It hides the CKEDITOR while clicking an existing Event
                \$('#cke_content').hide();
                \$('#start_date').html(startDateToString);
                if (diffDays > 1) {
                    \$('#end_date').html(' - ' + endDateMinusOne);
                } else if (diffDays == 0) {
                    var start_date_value = start.format('ll');
                    var startTime = start.format('LT');
                    var endTime = end.format('LT');
                    \$('#start_date').html('');
                    \$('#end_date').html(start_date_value + \" (\" + startTime + \" - \" + endTime+\") \");
                } else {
                    \$('#end_date').html('');
                }

                if (\$(\"#title\").parent().find('#title_edit').length == 0) {
                    \$(\"#title\").parent().append('<div id=\"title_edit\"></div>');
                }

                \$(\"#title_edit\").html(calEvent.title);

                if (\$(\"#content\").parent().find('#content_edit').length == 0) {
                    \$(\"#content\").parent().append('<div id=\"content_edit\"></div>');
                }
                \$(\"#content_edit\").html(calEvent.description);

                if (\$(\"#comment\").parent().find('#comment_edit').length == 0) {
                    \$(\"#comment\").parent().append('<div id=\"comment_edit\"></div>');
                }

                if (calEvent.course_name) {
                    \$(\"#calendar_course_info\").html(
                        '<div class=\"form-group\"><label class=\"col-sm-2 control-label\">";
        // line 516
        echo get_lang("Course");
        echo "</label>' +
                        '<div class=\"class=\"col-sm-8\">' + calEvent.course_name+\"</div></div>\"
                    );
                } else {
                    \$(\"#calendar_course_info\").html('');
                }

                if (calEvent.session_name) {
                    \$(\"#calendar_session_info\").html(
                        '<div class=\"form-group\"><label class=\"col-sm-2 control-label\">";
        // line 525
        echo get_lang("Session");
        echo "</label>'+
                        '<div class=\"class=\"col-sm-8\">' + calEvent.session_name+\"</div></div>\"
                    );
                } else {
                    \$(\"#calendar_session_info\").html('');
                }

                if (calEvent.comment != '') {
                    \$(\"#comment_edit\").html(calEvent.comment);
                    \$(\"#comment_edit\").show();
                }

                if (calEvent.attachment != '') {
                    \$(\"#attachment_text\").html(calEvent.attachment);
                    \$(\"#attachment_block\").show();
                    \$(\"#attachment_text\").show();
                }

                \$(\"#title_edit\").show();
                \$(\"#content_edit\").show();

                \$(\"#title\").hide();
                \$(\"#content\").hide();
                \$(\"#comment\").hide();

\t\t\t\tallFields.removeClass( \"ui-state-error\" );
\t\t\t\t\$(\"#dialog-form\").dialog(\"open\");

\t\t\t\tvar url = '";
        // line 553
        echo ($context["web_agenda_ajax_url"] ?? null);
        echo "&a=edit_event&id='+calEvent.id+'&view='+view.name;
\t\t\t\tvar delete_url = '";
        // line 554
        echo ($context["web_agenda_ajax_url"] ?? null);
        echo "&a=delete_event&id='+calEvent.id;

\t\t\t\t\$(\"#dialog-form\").dialog({
\t\t\t\t\tbuttons: {
                        '";
        // line 558
        echo get_lang("ExportiCalConfidential");
        echo "' : function() {
                            url =  \"";
        // line 559
        echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
        echo "calendar/ical_export.php?id=\" + calEvent.id+'&course_id='+calEvent.course_id+\"&class=confidential\";
                            window.location.href = url;
\t\t\t\t\t\t},
\t\t\t\t\t\t'";
        // line 562
        echo get_lang("ExportiCalPrivate");
        echo "': function() {
                            url =  \"";
        // line 563
        echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
        echo "calendar/ical_export.php?id=\" + calEvent.id+'&course_id='+calEvent.course_id+\"&class=private\";
                            window.location.href = url;
\t\t\t\t\t\t},
                        '";
        // line 566
        echo get_lang("ExportiCalPublic");
        echo "': function() {
                            url =  \"";
        // line 567
        echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
        echo "calendar/ical_export.php?id=\" + calEvent.id+'&course_id='+calEvent.course_id+\"&class=public\";
                            window.location.href = url;
\t\t\t\t\t\t},
                        ";
        // line 570
        if ((($context["type"] ?? null) == "not_available")) {
            // line 571
            echo "\t\t\t\t\t\t'";
            echo get_lang("Edit");
            echo "' : function() {
\t\t\t\t\t\t\tvar bValid = true;
\t\t\t\t\t\t\tbValid = bValid && checkLength( title, \"title\", 1, 255 );

\t\t\t\t\t\t\tvar params = \$(\"#add_event_form\").serialize();
\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\turl: url+'&'+params,
\t\t\t\t\t\t\t\tsuccess:function() {
\t\t\t\t\t\t\t\t\tcalEvent.title = \$(\"#title\").val();
\t\t\t\t\t\t\t\t\tcalEvent.start = calEvent.start;
\t\t\t\t\t\t\t\t\tcalEvent.end = calEvent.end;
\t\t\t\t\t\t\t\t\tcalEvent.allDay = calEvent.allDay;
\t\t\t\t\t\t\t\t\tcalEvent.description = \$(\"#content\").val();
\t\t\t\t\t\t\t\t\tcalendar.fullCalendar('updateEvent',
                                        calEvent,
                                        true // make the event \"stick\"
\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t\t\$(\"#dialog-form\").dialog(\"close\");
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t},
                        ";
        }
        // line 593
        echo "                        '";
        echo get_lang("Edit");
        echo "' : function() {
                            url =  \"";
        // line 594
        echo $this->getAttribute(($context["_p"] ?? null), "web_main", []);
        echo "calendar/agenda.php?action=edit&type=fromjs&id=\"+calEvent.id+'&course_id='+calEvent.course_id+\"\";
                            window.location.href = url;
                            \$(\"#dialog-form\").dialog( \"close\" );
                        },
\t\t\t\t\t\t'";
        // line 598
        echo get_lang("Delete");
        echo "': function() {
                            if (calEvent.parent_event_id || calEvent.has_children != '') {
                                var newDiv = \$('<div>');
                                newDiv.dialog({
                                    modal: true,
                                    title: \"";
        // line 603
        echo get_lang("DeleteThisItem");
        echo "\",
                                    buttons: []
                                });

                                var buttons = newDiv.dialog(\"option\", \"buttons\");

                                if (calEvent.has_children == '0') {
                                    buttons.push({
                                        text: '";
        // line 611
        echo get_lang("DeleteThisItem");
        echo "',
                                        click: function() {
                                            \$.ajax({
                                                url: delete_url,
                                                success:function() {
                                                    calendar.fullCalendar('removeEvents',
                                                        calEvent
                                                    );
                                                    calendar.fullCalendar(\"refetchEvents\");
                                                    calendar.fullCalendar(\"rerenderEvents\");
                                                    \$(\"#dialog-form\").dialog(\"close\");
                                                    newDiv.dialog( \"destroy\" );
                                                }
                                            });
                                        }
                                    });
                                    newDiv.dialog(\"option\", \"buttons\", buttons);
                                }

                                var buttons = newDiv.dialog(\"option\", \"buttons\");
                                buttons.push({
                                    text: '";
        // line 632
        echo get_lang("DeleteAllItems");
        echo "',
                                    click: function() {
                                        \$.ajax({
                                            url: delete_url+'&delete_all_events=1',
                                            success:function() {
                                                calendar.fullCalendar('removeEvents',
                                                    calEvent
                                                );
                                                calendar.fullCalendar('refetchEvents');
                                                calendar.fullCalendar('rerenderEvents');
                                                \$(\"#dialog-form\").dialog('close');
                                                newDiv.dialog( \"destroy\" );
                                            }
                                        });
                                    }
                                });
                                newDiv.dialog(\"option\", \"buttons\", buttons);

                                return true;
                            }

\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\turl: delete_url,
\t\t\t\t\t\t\t\tsuccess:function() {
\t\t\t\t\t\t\t\t\tcalendar.fullCalendar('removeEvents',
\t\t\t\t\t\t\t\t\t\tcalEvent
\t\t\t\t\t\t\t\t\t);
\t\t\t\t\t\t\t\t\tcalendar.fullCalendar('refetchEvents');
\t\t\t\t\t\t\t\t\tcalendar.fullCalendar('rerenderEvents');
\t\t\t\t\t\t\t\t\t\$(\"#dialog-form\").dialog('close');
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\tclose: function() {
                        \$(\"#title_edit\").hide();
                        \$(\"#content_edit\").hide();
                        \$(\"#comment_edit\").hide();
                        \$(\"#attachment_block\").hide();
                        \$(\"#attachment_text\").hide();

                        \$(\"#title\").show();
                        \$(\"#content\").show();
                        \$(\"#comment\").show();

\t\t\t\t\t\t\$(\"#title_edit\").html('');
\t\t\t\t\t\t\$(\"#content_edit\").html('');
                        \$(\"#comment_edit\").html('');
                        \$(\"#attachment_text\").html('');

                        \$(\"#title\").val('');
                        \$(\"#content\").val('');
                        \$(\"#comment\").val('');
\t\t\t\t\t}
\t\t\t\t});
\t\t\t} else {
\t\t\t    // Simple form
                \$('#simple_start_date').html(startDateToString);
                if (diffDays > 1) {
                    \$('#simple_end_date').html(' - ' + endDateMinusOne);
                } else if (diffDays == 0) {
                    var start_date_value = start.format('ll');
                    var startTime = start.format('LT');
                    var endTime = end.format('LT');
                    \$('#simple_start_date').html('');
                    \$('#simple_end_date').html(start_date_value + \" (\" + startTime + \" - \" + endTime+\") \");
                } else {
                    \$('#simple_end_date').html('');
                }

                if (calEvent.course_name) {
                    \$(\"#calendar_course_info_simple\").html(
                        '<div class=\"form-group\"><label class=\"col-sm-3 control-label\">";
        // line 704
        echo get_lang("Course");
        echo "</label>' +
                        '<div class=\"col-sm-9\">' + calEvent.course_name+\"</div></div>\"
                    );
                } else {
                    \$(\"#calendar_course_info_simple\").html('');
                }

                if (calEvent.session_name) {
                    \$(\"#calendar_session_info\").html(
                        '<div class=\"form-group\"><label class=\"col-sm-3 control-label\">";
        // line 713
        echo get_lang("Session");
        echo "</label>' +
                        '<div class=\"col-sm-9\">' + calEvent.session_name+\"</div></div>\"
                    );
                } else {
                    \$(\"#calendar_session_info\").html('');
                }

                \$(\"#simple_title\").html(calEvent.title);
                \$(\"#simple_content\").html(calEvent.description);
                \$(\"#simple_comment\").html(calEvent.comment);
                \$(\"#simple_attachment\").html(calEvent.attachment);

                \$(\"#simple-dialog-form\").dialog(\"open\");
                \$(\"#simple-dialog-form\").dialog({
\t\t\t\t\tbuttons: {
\t\t\t\t\t\t'";
        // line 728
        echo get_lang("ExportiCalConfidential");
        echo "' : function() {
                            url =  \"ical_export.php?id=\" + calEvent.id+'&course_id='+calEvent.course_id+\"&class=confidential\";
                            window.location.href = url;
\t\t\t\t\t\t},
\t\t\t\t\t\t'";
        // line 732
        echo get_lang("ExportiCalPrivate");
        echo "': function() {
                            url =  \"ical_export.php?id=\" + calEvent.id+'&course_id='+calEvent.course_id+\"&class=private\";
                            window.location.href = url;
\t\t\t\t\t\t},
                        '";
        // line 736
        echo get_lang("ExportiCalPublic");
        echo "': function() {
                            url =  \"ical_export.php?id=\" + calEvent.id+'&course_id='+calEvent.course_id+\"&class=public\";
                            window.location.href = url;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t});
            }
\t\t},
\t\teditable: true,
\t\tevents: \"";
        // line 745
        echo ($context["web_agenda_ajax_url"] ?? null);
        echo "&a=get_events\",
\t\teventDrop: function(event, delta, revert_func) {
\t\t    var allDay = 0;
\t\t    if (event.allDay == true) {
\t\t        allDay = 1;
            }
\t\t\t\$.ajax({
\t\t\t\turl: '";
        // line 752
        echo ($context["web_agenda_ajax_url"] ?? null);
        echo "',
\t\t\t\tdata: {
                    a: 'move_event',
                    id: event.id,
                    all_day: allDay,
                    minute_delta: delta.asMinutes()
\t\t\t\t}
\t\t\t});
\t\t},
        eventResize: function(event, delta, revert_func) {
            \$.ajax({
\t\t\t\turl: '";
        // line 763
        echo ($context["web_agenda_ajax_url"] ?? null);
        echo "',
\t\t\t\tdata: {
                    a: 'resize_event',
                    id: event.id,
                    minute_delta: delta.asMinutes()
\t\t\t\t}
\t\t\t});
        },
\t\taxisFormat: 'H(:mm)', // pm-am format -> h(:mm)a
\t\ttimeFormat: 'H:mm',   // pm-am format -> h:mm
\t\tloading: function(bool) {
\t\t\tif (bool) \$('#loading').show();
\t\t\telse \$('#loading').hide();
\t\t}
\t});
});
</script>
";
        // line 780
        echo ($context["actions_div"] ?? null);
        echo "
";
        // line 781
        echo ($context["toolbar"] ?? null);
        echo "

<div id=\"simple-dialog-form\" style=\"display:none;\">
    <div style=\"width:500px;\">
        <form name=\"form-simple\" class=\"form-horizontal\">
            <span id=\"calendar_course_info_simple\"></span>
            <span id=\"calendar_session_info\"></span>
            <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\">
                    <b>";
        // line 790
        echo get_lang("Date");
        echo "</b>
                </label>
                <div class=\"col-sm-9\">
                    <span id=\"simple_start_date\"></span>
                    <span id=\"simple_end_date\"></span>
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\">
                    <b>";
        // line 799
        echo get_lang("Title");
        echo "</b>
                </label>
                <div class=\"col-sm-9\">
                    <div id=\"simple_title\"></div>
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\">
                    <b>";
        // line 807
        echo get_lang("Description");
        echo "</b>
                </label>
                <div class=\"col-sm-9\">
                    <div id=\"simple_content\"></div>
                </div>
            </div>
            <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\">
                    <b>";
        // line 815
        echo get_lang("Comment");
        echo "</b>
                </label>
                <div class=\"col-sm-9\">
                    <div id=\"simple_comment\"></div>
                </div>
            </div>

            <div class=\"form-group\">
                <label class=\"col-sm-3 control-label\">
                    <b>";
        // line 824
        echo get_lang("Attachment");
        echo "</b>
                </label>
                <div class=\"col-sm-9\">
                    <div id=\"simple_attachment\"></div>
                </div>
            </div>
        </form>
    </div>
</div>

<div id=\"dialog-form\" style=\"display:none;\">
\t<div class=\"dialog-form-content\">
        ";
        // line 836
        echo ($context["form_add"] ?? null);
        echo "
\t</div>
</div>

";
        // line 840
        if (($context["legend_list"] ?? null)) {
            // line 841
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["legend_list"] ?? null));
            foreach ($context['_seq'] as $context["color"] => $context["text"]) {
                // line 842
                echo "        <span style=\"background-color: ";
                echo $context["color"];
                echo "\" class=\"label label-default\">&nbsp;</span> ";
                echo $context["text"];
                echo " &nbsp;&nbsp;
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['color'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 844
            echo "    <br /><br />
";
        }
        // line 846
        echo "<div id=\"loading\" style=\"margin-left:150px;position:absolute;display:none\">
    ";
        // line 847
        echo get_lang("Loading");
        echo "...
</div>
<div id=\"calendar\"></div>
";
    }

    public function getTemplateName()
    {
        return "default/agenda/month.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1079 => 847,  1076 => 846,  1072 => 844,  1061 => 842,  1056 => 841,  1054 => 840,  1047 => 836,  1032 => 824,  1020 => 815,  1009 => 807,  998 => 799,  986 => 790,  974 => 781,  970 => 780,  950 => 763,  936 => 752,  926 => 745,  914 => 736,  907 => 732,  900 => 728,  882 => 713,  870 => 704,  795 => 632,  771 => 611,  760 => 603,  752 => 598,  745 => 594,  740 => 593,  714 => 571,  712 => 570,  706 => 567,  702 => 566,  696 => 563,  692 => 562,  686 => 559,  682 => 558,  675 => 554,  671 => 553,  640 => 525,  628 => 516,  586 => 477,  583 => 476,  578 => 473,  576 => 472,  567 => 466,  562 => 464,  541 => 445,  535 => 441,  532 => 440,  526 => 436,  524 => 435,  501 => 414,  495 => 410,  493 => 409,  490 => 408,  484 => 404,  482 => 403,  402 => 326,  387 => 314,  383 => 313,  377 => 310,  360 => 296,  349 => 288,  345 => 287,  338 => 283,  298 => 245,  292 => 243,  290 => 242,  284 => 238,  275 => 232,  271 => 230,  269 => 229,  255 => 218,  60 => 26,  53 => 22,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "default/agenda/month.tpl", "C:\\xampp\\htdocs\\chamilo-1.11.16\\main\\template\\default\\agenda\\month.tpl");
    }
}
