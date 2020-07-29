// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Facebody20191230.Models
{
    public class SearchFaceResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public SearchFaceResponseData Data { get; set; }
        public class SearchFaceResponseData : TeaModel {
            [NameInMap("MatchList")]
            [Validation(Required=true)]
            public List<SearchFaceResponseDataMatchList> MatchList { get; set; }
            public class SearchFaceResponseDataMatchList : TeaModel {
                    public List<SearchFaceResponseDataMatchListFaceItems> FaceItems { get; set; }
                    public class SearchFaceResponseDataMatchListFaceItems : TeaModel {
                            public string FaceId { get; set; }
                            public float? Score { get; set; }
                            public string ExtraData { get; set; }
                            public string EntityId { get; set; }
                    }
                    public SearchFaceResponseDataMatchListLocation Location { get; set; }
                    public class SearchFaceResponseDataMatchListLocation : TeaModel {
                        [NameInMap("X")]
                        [Validation(Required=true)]
                        public int? X { get; set; }

                        [NameInMap("Y")]
                        [Validation(Required=true)]
                        public int? Y { get; set; }

                        [NameInMap("Width")]
                        [Validation(Required=true)]
                        public int? Width { get; set; }

                        [NameInMap("Height")]
                        [Validation(Required=true)]
                        public int? Height { get; set; }

                    }
            }
        };

    }

}
