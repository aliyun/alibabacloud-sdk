// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class AddTagsRequest : TeaModel {
        [NameInMap("Tag")]
        [Validation(Required=true)]
        public List<AddTagsRequestTag> Tag { get; set; }
        public class AddTagsRequestTag : TeaModel {
            [NameInMap("Key")]
            [Validation(Required=true)]
            public string Key { get; set; }

            [NameInMap("Value")]
            [Validation(Required=true)]
            public string Value { get; set; }

        }

        [NameInMap("GroupIds")]
        [Validation(Required=true)]
        public List<string> GroupIds { get; set; }

    }

}
