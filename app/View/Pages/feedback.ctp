<div class="wrapper">
    <?php echo $this->element('mypage_sidebar'); ?>

    <div class="main-content">
        <div class="myprofile-info">
            <h2>Feedback Form</h2>
        </div>
        <div class="myprofile-data">
            <form action="" class="feedback">
                <ul>
                    <li class="myprofile-data-list">
                        <label>Name:</label>
                        <input type="text">
                    </li>
                    <li class="myprofile-data-list">
                        <label>Rate:</label>
                        <select>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                        </select>
                    </li>
                    <li class="myprofile-data-list">
                        <label>Feedback:</label>
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                    </li>
                    <li class="myprofile-data-list myprofile-data-list-button">
                        <button>SUBMIT</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>