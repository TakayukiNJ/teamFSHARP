import React from 'react';
import { Link } from 'react-router-dom';

// Windowを閉じる
const click =(e)=> {
    e.preventDefault();
    console.log(e);
	window.close();
}

const Header = (props) => (
  <div>
    <header>Bitflyer連携機能(NPO支援選択メニュー)</header>
    <menu>
      <ul>
        <li><a href="" onClick={click}>画面を閉じる</a></li>
		<li><Link to={"/transferDetail/" + props.data}>送金履歴</Link></li>
		<li><Link to={"/paymentDetail/" + props.data}>入金履歴</Link></li>
      </ul>
    </menu>
  </div>
);

export default Header;