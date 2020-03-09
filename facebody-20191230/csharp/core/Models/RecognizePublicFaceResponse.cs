// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Facebody.Models
{
    public class RecognizePublicFaceResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public RecognizePublicFaceResponseData Data { get; set; }
        public class RecognizePublicFaceResponseData : TeaModel {
            [NameInMap("Elements")]
            [Validation(Required=true)]
            public List<RecognizePublicFaceResponseDataElements> Elements { get; set; }
            public class RecognizePublicFaceResponseDataElements : TeaModel {
                    public string TaskId { get; set; }
                    public string ImageURL { get; set; }
                    public List<RecognizePublicFaceResponseDataElementsResults> Results { get; set; }
                    public class RecognizePublicFaceResponseDataElementsResults : TeaModel {
                            public string Label { get; set; }
                            public string Suggestion { get; set; }
                            public float? Rate { get; set; }
                            public List<RecognizePublicFaceResponseDataElementsResultsSubResults> SubResults { get; set; }
                            public class RecognizePublicFaceResponseDataElementsResultsSubResults : TeaModel {
                                    public float? H { get; set; }
                                    public float? W { get; set; }
                                    public float? X { get; set; }
                                    public float? Y { get; set; }
                                    public List<RecognizePublicFaceResponseDataElementsResultsSubResultsFaces> Faces { get; set; }
                                    public class RecognizePublicFaceResponseDataElementsResultsSubResultsFaces : TeaModel {
                                            public string Id { get; set; }
                                            public string Name { get; set; }
                                            public float? Rate { get; set; }
                                    }
                            }
                    }
            }
        };

    }

}
