// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class RemoveTagsResponse : TeaModel {
        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Tag")]
        [Validation(Required=true)]
        public RemoveTagsResponseTag Tag { get; set; }
        public class RemoveTagsResponseTag : TeaModel {
            [NameInMap("Tags")]
            [Validation(Required=true)]
            public List<string> Tags { get; set; }
        };

    }

}
