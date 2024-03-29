@extends('layouts.templates.master')
@section('content')
<router-view v-on:keyword_changed="text_length"></router-view>
                    <div class=" row" >
                        <div class="col-md-12 d-flex align-items-stretch grid-margin">
                            <div class="row flex-grow">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <!-- <h4 class="card-title">Input Text</h4> -->
                                            <p>Input Your Text &nbsp; 
                                                {{-- <span class=" float-right text-right"
                                                    style="color:#128bfc;">Selected
                                                    Text: 1290
                                                    words, 1900
                                                    Characters</span> --}}
                                            </p>
                                            {{-- <form class="forms-sample"> --}}

                                                <div class="form-group">
                                                    <!-- <label for="thetext">Your text</label> -->
                                                    <textarea class="form-control" id="main_text" 
                                                    v-model="text_in_textarea"
                                                    v-on:keyup="text_length" 
                                                    v-on:change="text_length" 
                                                    v-on:paste="text_length"
                                                    v-on:input="text_length" 
                                                    v-on:click="text_length"
                                                    placeholder='Copy paste or write your text here....'
                                                    rows="17"></textarea>
                                                </div>
                                                <a style="background-color: rgb(0 0 0 / 90%);border-color: rgb(0 0 0 / 90%);color:#fff;" href="#results" class="btn mr-2"><i
                                                        class="mdi mdi-export icon-lg"></i>Result</a>
                                                <button style="color: #fff; background-color: #1100fd;border-color: #2400f3;" class="btn " v-on:click="reset">
                                                     <i
                                                        class="mdi mdi-undo-variant  icon-lg"></i>
                                                    Reset</button>
                                            {{-- </form> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                        <div class="container "
                style="background-color: #fff; padding-top: 2rem; padding-left: 1rem; padding-bottom: 2rem; padding-right: 1rem; border-radius: 6px;">

                <h1 style="font-size: 2rem; padding-bottom: 2rem;">Word counter - count Characters & Best keyword
                    density checker</h1>


                <h2 style="font-size: 1.7rem;"><strong>An Introduction</strong></h2>



                <p>Word counter is an amazing online tool used for counting Words, Characters, Sentences, Pages, and
                    Paragraphs in real-time, along with Spellings, Grammar, and Plagiarism checking. It upgrades your
                    level of choosing words and your writing style as well. It prepares you well for public speaking
                    like class presentations, wedding speeches, or anything else. Moreover, it will also estimate your
                    speaking time accurately.</p>



                <h2 style="font-size: 1.7rem;">Features of Word Counter</h2>



                <p>You can start writing directly into the text area or you can also paste your written content from
                    anywhere you want. When you'll start typing, words and character counts will be displayed at the top
                    so, you can increase or decrease the number of characters and words, you can also edit or delete
                    them according to your need. Also, if you commit a mistake while typing any content then it will be
                    underlined instantly. To make your typing easy and fast, it will show your most frequently used
                    keywords at the right. In addition, this will stop you from overusing a specific word or combination
                    of words. Thus, it will help you to use different keywords in your content.</p>



                <p> Word Counter can be used to track the length of any text against the requirement of a common
                    web-like, Twitter allows you to write a text of about 140 characters, Facebook's average length of
                    the text is about 250 characters, if your text is more than 360 characters then, it will start to
                    show you the number of sentences, paragraphs, and pages. Furthermore, it helps you to write
                    long-form content like blog posts, articles, essays, papers, dissertations, and much other content.
                </p>



                <p>Apart from all of the above, it has an amazing feature i.e Auto-Save Feature. It will save changes
                    that you have made in the content while editing, even if you wanna leave the site and want to come
                    back after few moments.</p>



                <h2 style="font-size: 1.7rem;">How to customize Text on Word Counter?</h2>



                <p>In the middle of the homepage, you'll see the text box where you can place your text or content. And
                    on the right of the text box, it will present you variety of fonts. You can choose any of them
                    according to your need. The size tab is also present next to the right side as well. The font size
                    provided by the Word Counter is in the range of 10 to 14. The first two cool tabs are available on
                    the most used word processors. But the third tab is quite unique that helps you to alter the letter
                    case of the text or content. Mostly, the start of every sentence is in the upper case, it is in the
                    default setting, but you can also customize this setting and can change the text to all upper and
                    lower cases. The other available tab allows you to make text into a title or a heading. The last tab
                    but not least, if you wanna erase the entire text and start with the new one then this tab helps you
                    to erase the previous text.</p>



                <h2 style="font-size: 1.7rem;">Counters on Word Counter</h2>



                <p>Right above the tabs, you can see five labeled boxes these are known as counters. The first box will
                    present you with the word count for the text that you've pasted from any other place. The next two
                    boxes will show you the number of characters in the text. One of them will show you with account
                    spaces and the other will not. Next to this, it will count the number of sentences by the presence
                    of an end punctuation i.e Full Stop. Headings and titles will not be count as sentences. If there is
                    no end punctuation in the text then, it will show you a count of one. At last, it has the paragraph
                    count that will show you the number of paragraphs through the presence of breaks in between texts
                    and little contents.</p>



                <h2 style="font-size: 1.7rem;">Word Frequency Counter</h2>



                <p>At the right of the text box, you'll find the word frequency counter that shows you the list of used
                    words, their number of appearances in the text, and the percentage of the text they comprise. So,
                    this will be very helpful for SEO purposes. Thus, it helps you to judge the overuse of any certain
                    keyword in a text and can optimize your text in a better way.</p>



                <h2 style="font-size: 1.7rem;">Word Counter Per Page Converter</h2>



                <p>Another feature of the word counter is that it allows you to get the total number of pages that your
                    text occupies. It depends on the font size, space, and words. So, you can use this feature to find
                    out the exact number of pages.</p>



                <h2 style="font-size: 1.7rem;">Flesch Reading Score and Text Readability in Word Counter</h2>



                <p>These features will saves you a lot of time by giving you an estimate of how much time it would take
                    for an average person to read through the text or content. This helps you in public speakings like
                    class presentations, wedding speeches, and many others.</p>



                <h2 style="font-size: 1.7rem;">Grammar Checking with Word Counter</h2>



                <p>Grammar plays an effective role
                    in writing for a blog or anything else. It is considered the backbone of a text or content. It will
                    be very helpful to you if you often use Google Documents. Whenever you use a wrong word or a
                    spelling it will be underlined instantly and it provides you the correct form or word. So, you can
                    replace or remove the wrong word that you have used there. Thus, it will upgrade your writing skill
                    a lot. It will show all your mistakes that either you have misused an active or passive voice or any
                    punctuation. You'll get the number of mistakes as well. You can choose to use its grammar checking
                    services at no cost.</p>



                <h2 style="font-size: 1.7rem;">Plagiarism checking</h2>



                <p>Plagiarizing somebody else's work is considered the biggest fault on Google. That's why many writers
                    have this fear. But Nowadays plagiarism is not that big issue in the writing world. Because word
                    counter-like tools help you to avoid getting plagiarized on Google at all. It will show you
                    plagiarism instantly, which helps you to make your content 100% unique and 100% yours. You will not
                    get flagged for plagiarism anymore. You can choose to use its plagiarism checking without losing a
                    single penny.</p>



                <h2 style="font-size: 1.7rem;">More about Word Counter</h2>



                <p>Word counter blog helps you to write perfect, plagiarism, and error-free books and texts. It provides
                    you a simple and helpful guide that helps you to use which type of word you should use and where you
                    should use it. In fact, the main function of the word count is to count the words, phrases,
                    sentences, pages, and characters but it also performs some extra functions. So, I hope you've liked
                    it. If I am right then copy your text or start typing right here. And I believe you'll be amazed
                    after watching its services.</p>



                <h2 style="font-size: 1.7rem;">Final Thoughts about Word counter</h2>



                <p>Words are like bread and butter to a writer and each word in the text represents a unique aspect of
                    story and writer as well. So, words are very dear to a writer. Thus, it stills a great achievement
                    to know the number of words behind a lovely content or a text. So, make your all words count with
                    word counter that you have placed in the text for a reason. I think word counter will be very
                    helpful, peaceful and a peace of satisfaction for you.</p>

                <div class="container">
                    <a href="{{ url('keyword-density-calculator-tool') }}">Next Post: keyword density calculator</a>
                </div>
                <div class="container">
                    <a href="{{ url('pdf-to-text-converter') }}">Next Post: PDF to text converter
                        tool</a>
                </div>

                {{-- /content --}}

            </div>
    
@endsection