@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{asset('dashboard-assets/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard-assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard-assets/assets/css/style.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Source+Code+Pro:200' rel='stylesheet' type='text/css'>

    <style type="text/css">
        a:focus, a:hover{
            color: white !important;
        }

        textarea, input, button {
            outline: none;
        }

        .window-button, .window .buttons .close, .window .buttons .minimize, .window .buttons .maximize {
            padding: 0;
            margin: 0;
            margin-right: 4px;
            width: 12px;
            height: 12px;
            background-color: gainsboro;
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 6px;
            color: rgba(0, 0, 0, 0.5);
        }

        .window {
            animation: bounceIn 1s ease-in-out;
            width: 640px;
        }
        .window .handle {
            height: 22px;
            background: linear-gradient(0deg, #d8d8d8, #ececec);
            border-top: 1px solid white;
            border-bottom: 1px solid #b3b3b3;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            color: rgba(0, 0, 0, 0.7);
            font-family: Helvetica, sans-serif;
            font-size: 13px;
            line-height: 22px;
            text-align: center;
        }
        .window .buttons {
            position: absolute;
            float: left;
            margin: 0 8px;
        }
        .window .buttons .close {
            background-color: #ff6159;
        }
        .window .buttons .minimize {
            background-color: #ffbf2f;
        }
        .window .buttons .maximize {
            background-color: #25cc3e;
        }
        .window .terminal {
            padding: 4px;
            background-color: black;
            opacity: 0.7;
            height: 400px;
            color: white;
            font-family: 'Source Code Pro', monospace;
            font-weight: 200;
            font-size: 14px;
            white-space: pre-wrap;
            white-space: -moz-pre-wrap;
            white-space: -pre-wrap;
            white-space: -o-pre-wrap;
            word-wrap: break-word;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
            overflow-y: auto;
        }
        .window .terminal::after {
            content: "|";
            animation: blink 2s steps(1) infinite;
        }

        .prompt {
            color: #bde371;
        }

        .path {
            color: #5ed7ff;
        }

        @keyframes blink {
            50% {
                color: transparent;
            }
        }
        @keyframes bounceIn {
            0% {
                transform: translateY(-1000px);
            }
            60% {
                transform: translateY(200px);
            }
            100% {
                transform: translateY(0px);
            }
        }

    </style>
@endsection
@section('content')
    <div style="margin-top: 5em">

        @include('includes.left-panel')


        <div id="right-panel" class="right-panel" style="width: 80%;">
            <div class="content mt-3">
                <div class="container" style="display: flex;justify-content: center;">
                    <div class="window mt-lg-3">
                        <div class="handle">
                            <div class="buttons" style="display: flex;">
                                <button class="close">
                                </button>
                                <button class="minimize">
                                </button>
                                <button class="maximize">
                                </button>
                            </div>
                            <span class="title"></span>
                        </div>
                        <div class="terminal"></div>
                    </div>
                </div>
            </div> <!-- .content -->
        </div><!-- /#right-panel -->
    </div>
@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.terminal/2.0.1/js/jquery.terminal.min.js"></script>
    <script src="{{asset('dashboard-assets/assets/js/main.js')}}"></script>
    <script src="{{asset('dashboard-assets/assets/js/dashboard.js')}}"></script>
    <script type="text/javascript">

        jQuery(document).ready(function() {
            "use strict";

            // UTILITY
            function getRandomInt(min, max) {
                return Math.floor(Math.random() * (max - min)) + min;
            }
            // END UTILITY

            // COMMANDS
            function ping() {
                terminal.append("pinging all machines with 32 bytes of data:\n" +
                    "Reply from 216.58.196.11: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.12: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.13: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.14: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.15: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.16: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.17: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.18: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.19: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.20: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.21: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.22: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.23: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.24: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.25: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.26: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.27: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.28: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.29: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.30: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.31: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.32: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.33: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.34: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.35: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.36: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.37: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.38: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.39: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.40: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.41: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.42: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.43: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.44: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.45: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.46: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.47: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.48: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.49: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.50: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.51: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.52: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.53: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.54: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.55: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.56: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.57: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.58: bytes=32 time=26ms TTL=55\n"+
                    "Reply from 216.58.196.69: bytes=32 time=26ms TTL=55\n"
                );
            }

            function clear() {
                terminal.text("");
            }

            function help() {
                terminal.append("ping - pings all machines in all labs\n" +
                    "clear - clears terminal");
            }

            function echo(args) {
                var str = args.join(" ");
                terminal.append(str + "\n");
            }

            function fortune() {
                var xhr = new XMLHttpRequest();
                xhr.open('GET', 'https://cdn.rawgit.com/bmc/fortunes/master/fortunes', false);
                xhr.send(null);

                if (xhr.status === 200) {
                    var fortunes = xhr.responseText.split("%");
                    var fortune = fortunes[getRandomInt(0, fortunes.length)].trim();
                    terminal.append(fortune + "\n");
                }
            }
            // END COMMANDS

            var title = jQuery(".title");
            var terminal = jQuery(".terminal");
            var prompt = "➜";
            var path = "~";

            var commandHistory = [];
            var historyIndex = 0;

            var command = "";
            var commands = [{
                "name": "clear",
                "function": clear
            }, {
                "name": "help",
                "function": help
            },{
                "name": "ping",
                "function": ping
            }, {
                "name": "fortune",
                "function": fortune
            }, {
                "name": "echo",
                "function": echo
            }];

            function processCommand() {
                var isValid = false;

                // Create args list by splitting the command
                // by space characters and then shift off the
                // actual command.

                var args = command.split(" ");
                var cmd = args[0];
                args.shift();

                // Iterate through the available commands to find a match.
                // Then call that command and pass in any arguments.
                for (var i = 0; i < commands.length; i++) {
                    if (cmd === commands[i].name) {
                        commands[i].function(args);
                        isValid = true;
                        break;
                    }
                }

                // No match was found...
                if (!isValid) {
                    terminal.append("zsh: command not found: " + command + "\n");
                }

                // Add to command history and clean up.
                commandHistory.push(command);
                historyIndex = commandHistory.length;
                command = "";
            }

            function displayPrompt() {
                terminal.append("<span class=\"prompt\">" + prompt + "</span> ");
                terminal.append("<span class=\"path\">" + path + "</span> ");
            }

// Delete n number of characters from the end of our output
            function erase(n) {
                command = command.slice(0, -n);
                terminal.html(terminal.html().slice(0, -n));
            }

            function clearCommand() {
                if (command.length > 0) {
                    erase(command.length);
                }
            }

            function appendCommand(str) {
                terminal.append(str);
                command += str;
            }

            /*
                //	Keypress doesn't catch special keys,
                //	so we catch the backspace here and
                //	prevent it from navigating to the previous
                //	page. We also handle arrow keys for command history.
                */

            jQuery(document).keydown(function(e) {
                e = e || window.event;
                var keyCode = typeof e.which === "number" ? e.which : e.keyCode;

                // BACKSPACE
                if (keyCode === 8 && e.target.tagName !== "INPUT" && e.target.tagName !== "TEXTAREA") {
                    e.preventDefault();
                    if (command !== "") {
                        erase(1);
                    }
                }

                // UP or DOWN
                if (keyCode === 38 || keyCode === 40) {
                    // Move up or down the history
                    if (keyCode === 38) {
                        // UP
                        historyIndex--;
                        if (historyIndex < 0) {
                            historyIndex++;
                        }
                    } else if (keyCode === 40) {
                        // DOWN
                        historyIndex++;
                        if (historyIndex > commandHistory.length - 1) {
                            historyIndex--;
                        }
                    }

                    // Get command
                    var cmd = commandHistory[historyIndex];
                    if (cmd !== undefined) {
                        clearCommand();
                        appendCommand(cmd);
                    }
                }
            });

            jQuery(document).keypress(function(e) {
                // Make sure we get the right event
                e = e || window.event;
                var keyCode = typeof e.which === "number" ? e.which : e.keyCode;

                // Which key was pressed?
                switch (keyCode) {
                    // ENTER
                    case 13:
                    {
                        terminal.append("\n");

                        processCommand();
                        displayPrompt();
                        break;
                    }
                    default:
                    {
                        appendCommand(String.fromCharCode(keyCode));
                    }
                }
            });

// Set the window title
            title.text("1. marc@mbp: ~ (zsh)");

// Get the date for our fake last-login
            var date = new Date().toString(); date = date.substr(0, date.indexOf("GMT") - 1);

// Display last-login and promt
            terminal.append("Last login: " + date + " on ttys000\n"); displayPrompt();
        });
    </script>
@endsection





