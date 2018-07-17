import React, { Component } from 'react';
import PropTypes from 'prop-types';
import 'whatwg-fetch';

class RepoDetails extends Component {
  constructor(props) {
    super(props);
    this.state = {
      repository: {},
    };
  }

  componentDidMount() {
    const name = this.props.match.params.name;
    this.fetchData(name);
  }

  componentWillReceiveProps(nextProps) {
    const name = nextProps.match.params.name;
    this.fetchData(name);
  }

  fetchData(name) {
    fetch(`https://api.github.com/repos/pro-react/${name}`)
      .then(response => response.json())
      .then((responseData) => {
        this.setState({ repository: responseData });
      });
  }

  render() {
    const stars = [];
    for (let i = 0; i < this.state.repository.stargazers_count; i += 1) {
      stars.push('š');
    }

    return (
      <div>
        <h2>{ this.state.repository.name }</h2>
        <p>{ this.state.repository.description }</p>
        <span>{ stars }</span>
      </div>
    );
  }
}

RepoDetails.propTypes = {
  match: PropTypes.shape({
    params: PropTypes.shape({
      name: PropTypes.string.isRequired,
    }).isRequired,
  }).isRequired,
};

export default RepoDetails;