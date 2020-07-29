// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Facebody20191230.Models
{
    public class ListFaceDbsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public ListFaceDbsResponseData Data { get; set; }
        public class ListFaceDbsResponseData : TeaModel {
            [NameInMap("DbList")]
            [Validation(Required=true)]
            public List<ListFaceDbsResponseDataDbList> DbList { get; set; }
            public class ListFaceDbsResponseDataDbList : TeaModel {
                    public string Name { get; set; }
            }
        };

    }

}
