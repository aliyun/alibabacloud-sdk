// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vcs20200515.Models
{
    public class ListCorpsResponse : TeaModel {
        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public ListCorpsResponseData Data { get; set; }
        public class ListCorpsResponseData : TeaModel {
            [NameInMap("PageNumber")]
            [Validation(Required=true)]
            public int? PageNumber { get; set; }
            [NameInMap("PageSize")]
            [Validation(Required=true)]
            public int? PageSize { get; set; }
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public int? TotalCount { get; set; }
            [NameInMap("TotalPage")]
            [Validation(Required=true)]
            public int? TotalPage { get; set; }
            [NameInMap("Records")]
            [Validation(Required=true)]
            public List<ListCorpsResponseDataRecords> Records { get; set; }
            public class ListCorpsResponseDataRecords : TeaModel {
                    public string CorpId { get; set; }
                    public string CorpName { get; set; }
                    public string Description { get; set; }
                    public string CreateDate { get; set; }
                    public string ParentCorpId { get; set; }
                    public string AppName { get; set; }
                    public int? DeviceCount { get; set; }
            }
        };

    }

}
