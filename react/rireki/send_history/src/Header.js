import React from 'react';
import { Link } from 'react-router-dom';

const Header = (props) => (
  <div>
    <header>Bitflyer連携機能(NPO支援選択メニュー)</header>
    <menu>
      <ul>
        <li><Link to="/">F#に戻る</Link></li>
        <li><Link to={"/transfer/" + props.data}>送金履歴</Link></li>
        <li><Link to={"/payment/" + props.data}>入金履歴</Link></li>
		{props.data}
      </ul>
    </menu>
  </div>
);

export default Header;