
<style type="text/css">
     section{
        padding: 20px;
        height: auto;
        min-height: 600px;
        width: 80%;
        margin-left: 10%;
        margin-top: 50px;
        padding-bottom: 50px;
        border: 1px solid lightgray;
    }
    #list_title{
        width: 100%;
        height: 150px;
        background-color: lightgray;
        margin-bottom: 30px;
        padding: 10px;
        border-bottom-right-radius: 120px; 
    }
    #list_title h1{
        font-size: 50px;
        margin-bottom: 50px;
    }

    #a_group{
        margin-top: 50px;
    }
    #search_bar{
        width: 100%;
        height: 50px;
        padding: 10px;
        border: 1px solid gray;
    }
    #search{
        width: 270px;
        border-radius: 0;
        border: 1px solid lightgray;
        padding-left: 5px;
    }
    #select_group{
        width: auto;
        height: auto;
        float: right;
    }
    #type, #sort{
        width: 100px;
        height: 25px;
        border: 2px solid gray;
        border-radius: 0;
    }
    #submit{
        height: 100%;
        width: 30px;
        bottom: 8px;
        background-color: white;
        border-radius: 0;
        border: 1px solid gray;
    }
    #submit:hover{
        background-color: lightgray;
    }
    /*검색어 및 count 보여주는 div*/
    #search_info{
        margin-top: 20px;
        margin-bottom: 55px;
        width: 100%;     
    }
    #search_msg{
        float: left;
        width: 50%;
    }
    #search_msg svg{
        float: left;
        top: 5px;
        bottom: 5px;
        margin-right: 5px;
        position: relative;
    }
    #search_count{
        float: right;
    }

    section table{
        clear: both;
        margin-top: 10px;
        width: 100%;
        margin-bottom: 20px;
        text-align: center;
    }
    section table tr{
        height: 35px;
        border-bottom: 1px solid lightgray;
    }
    section th{
        background-color: rgba(20,20,20,0.08);
    }
    section tr:nth-child(1)~tr:hover{
        background-color: lightgray;
    }
    section td:nth-child(3){
        width: 40%;
    }
    section td a{
        display: block;
    }
    /*
    paging 버튼 관련 style
    ===
    paging_first
    paging_prev
    paging_num
    paging_next
    paging_last

    전체 class : paging;
    */
    #paging_link{
        width: 100%;
        text-align: center;
    }
    .paging{
        display: inline-block;
        text-align: center;
        width: 30px;
        height: 30px;
        border: 1px solid gray;
        margin-right: 5px;
        padding-top: 1px;
    }
    #paging_first, #paging_last{
        width: 50px;
    }
    .paging:hover{
        background-color: silver;
    }
    .now_page{
        background-color: gray;
        color: white;
    }
    .title_p{
        display: inline-block;
    }
    #reply_cnt{
        color: blue;
    }


    

</style>

    <section>
        <div id = "list_title">
            <h1><?=$user?>님의 게시물</h1>
            <a href="/user/myroom/<?=$user?>">작성자 프로필 보기</a>           
        </div>

            <div id = "search_info">
                <div id = "search_msg">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                      <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                    </svg>
                    <?php if($search == '전체') :?>
                        <p>전체 검색결과</p>
                    <?php elseif($search !== '전체'): ?>
                         <p>'<?=$search?>' 에 대한 검색결과</p>
                    <?php endif; ?>                    
                </div>

                <div id = "search_count">
                    <?= "작성자 게시물 수 : {$total_board}" ?>
                </div>               
            </div>           

            <table>
                <tr>
                    <th>글번호</th>
                    <th>게시판</th>
                    <th>제목</th>
                    <th>작성자</th>
                    <th>작성일</th>
                    <th>좋아요</th>
                    <th>조회수</th>
                </tr>

                <?php if(isset($error)): ?>
                    <tr>    
                        <td colspan="8">
                            <?= $error?>
                        </td>
                    </tr>
                     </table>
                <?php else :?>
                    <?php  ?>

                    <?php foreach($rs as $row): ?>
                        <?php $reply_cnt = $row['reply_cnt'] === '0' ? "" : "<p id = 'reply_cnt' class ='title_p'>&nbsp;(".$row['reply_cnt'].")</p>" ?>                        
                        <tr>
                            <td><?= $row['num']?></td>
                            <td><?= $row['cat']?></td>
                            <td><a href="/board/read/page/<?=$row['num']?>"><?= "<p class = 'title_p'>".$row['title']."</p>".$reply_cnt ?></a></td>
                            <td><a href=""><?= $row['user']?></a></td>
                            <td><?= $row['created']?></td>
                            <td><?= $row['good']?></td>
                            <td><?= $row['view']?></td>
                        </tr>

                    <?php endforeach; ?>
                        </table>
                        <div id = "paging_link">
                            <?= $paging_link?>  
                        </div>
                                           
                <?php endif; ?>          
        
    </section>
    
</body>
</html>