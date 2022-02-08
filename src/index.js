import {registerBlockType} from '@wordpress/blocks';
import {useBlockProps} from "@wordpress/block-editor";

registerBlockType(
  'jascha030/wpg-recent-posts',
  {
    apiVersion: 2,
    edit: function ({attributes, setAttributes}) {
      // noinspection JSXNamespaceValidation
      return (
        <div {...useBlockProps()}>
        </div>
      );
    }
  }
);