            <?php // REPEAT reread-wrap
                        $i = 0;
                          while($i < 5) {
                            $i++; 

                        if($i == 1){
                            $reread = get_field('reread');
                            $text = get_field('text');
                        }
                        else {
                            $reread = get_field('reread_'.$i);
                            $text = get_field('text_'.$i);
                        }
                        
                           echo '<aside class="reread-wrap"><span style="display: block;"><time datetime="'.$reread.'">'.$reread.'</time><span class="reread-text">再読</span></span>'.$text.'</aside>';
            }
            // REPEAT reread-wrap END ?>