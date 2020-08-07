// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Imgsearch20200320.Models
{
    public class ListImageDbsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public ListImageDbsResponseData Data { get; set; }
        public class ListImageDbsResponseData : TeaModel {
            [NameInMap("DbList")]
            [Validation(Required=true)]
            public List<ListImageDbsResponseDataDbList> DbList { get; set; }
            public class ListImageDbsResponseDataDbList : TeaModel {
                    public string Name { get; set; }
            }
        };

    }

}
