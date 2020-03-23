// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Imgsearch.Models
{
    public class SearchImageResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public SearchImageResponseData Data { get; set; }
        public class SearchImageResponseData : TeaModel {
            [NameInMap("MatchList")]
            [Validation(Required=true)]
            public List<SearchImageResponseDataMatchList> MatchList { get; set; }
            public class SearchImageResponseDataMatchList : TeaModel {
                    public string DataId { get; set; }
                    public string ExtraData { get; set; }
                    public string ImageUrl { get; set; }
                    public string EntityId { get; set; }
            }
        };

    }

}
