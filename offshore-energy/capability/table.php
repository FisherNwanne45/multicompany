<!DOCTYPE html>
<html>
<head>
    <style>
        .genealogy-body {
            margin: 20px auto;
            
        }
        .genealogy-tree ul {
            padding-top: 20px;
            position: relative;
        }
        .genealogy-tree li {
            display: inline-block;
            float: left;
            text-align: center;
            list-style-type: none;
            position: relative;
            padding: 20px 5px 0 5px;
        }
        .genealogy-tree li::before, .genealogy-tree li::after {
            content: '';
            position: absolute;
            top: 0;
            right: 50%;
            border-top: 1px solid #ccc;
            width: 30%;
            height: 20px;
        }
        .genealogy-tree li::after {
            right: auto;
            left: 50%;
            border-left: 1px solid #ccc;
        }
        .genealogy-tree li:only-child::after, .genealogy-tree li:only-child::before {
            
        }
        .genealogy-tree li:only-child {
            padding-top: 0;
        }
        .genealogy-tree li:first-child::before, .genealogy-tree li:last-child::after {
            border: 0 none;
        }
        .genealogy-tree li:last-child::before {
            border-right: 1px solid #ccc;
            border-radius: 0 5px 0 0;
        }
        .genealogy-tree li:first-child::after {
            border-radius: 5px 0 0 0;
        }
        .genealogy-tree ul ul::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            border-left: 1px solid #ccc;
            width: 0;
            height: 20px;
        }
        .genealogy-tree li a {
            border: 1px solid #ccc;
            padding: 5px 10px;
            text-decoration: none;
            color: #666;
            font-family: 'Arial', sans-serif;
            font-size: 5px;
            display: inline-block;
            background: #fff;
            border-radius: 5px;
            transition: 0.5s;
        }
        .genealogy-tree li a:hover {
            background: #5db2ff;
            color: #fff;
        }
        .genealogy-tree li a:hover+ul li a {
            background: #00bfff;
            color: #fff;
        }
        .genealogy-tree li a:hover+ul li::after,
        .genealogy-tree li a:hover+ul li::before,
        .genealogy-tree li a:hover+ul::before,
        .genealogy-tree li a:hover+ul ul::before {
            border-color: #00bfff;
        }
        .genealogy-tree .genealogy-scroll ul {
            
        }
        .genealogy-tree .genealogy-scroll>ul {
            display: block;
        }
        .genealogy-tree .genealogy-scroll li {
            padding: 20px 5px 0 5px;
            opacity: 0;
            transform: scale(0.5);
            transition: all 0.5s ease-in-out;
        }
        .genealogy-tree .genealogy-scroll li.genealogy-show {
            opacity: 1;
            transform: scale(1);
        }
    </style>
</head>
<body>
    <div class="genealogy-body">
        <div class="genealogy-tree">
             
                <ul>
                    <li>
                         Group of Investor 
                        <ul>
                             
                       
                   
                   
                    <li>
                         Technical Manager 
                         <ul>
                             <li>
                                 Operations 
                            </li>
                            <li>
                                 Maintenance 
                            </li>
                            <li>
                                 Technical Support 
                            </li>
                         </ul>
                    </li>
                   
                   
                    <li>
                         Planning Manager 
                        <ul>
                            <li> Short Term Planning </li>
                        </ul>
                    </li>
                    <li>
                         Health Safety Manager 
                        <ul>
                            <li> Environmental Protection </li>
                            <li> Fire Control </li>
                            <li> Training/Safety </li>
                        </ul>
                    </li>
                    <li>
                         Finance Manager 
                        <ul>
                            <li> Purchasing </li>
                            <li> Inventory </li>
                            <li> Sales/Marketing </li>
                        </ul>
                    </li>
                         
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    
</body>
</html>
