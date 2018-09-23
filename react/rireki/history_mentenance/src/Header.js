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
    <header>Bitflyer連携機能(トランザクション管理機能)</header>
    <menu>
      <ul>
        <li><a href="" onClick={click}>画面を閉じる</a></li>
		<li><Link to={"/search/" + props.data}>検索</Link></li>
		<li><Link to={"/regist/" + props.data}>登録</Link></li>
		<li><Link to={"/update/" + props.data}>更新</Link></li>
		<li><Link to={"/delete/" + props.data}>削除</Link></li>
      </ul>
    </menu>
  </div>
);

export default Header;